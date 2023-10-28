<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\TryCatch;

class AppointmentController extends Controller
{
    public function bookAppointment(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "required",
                "email" => "required",
                "services" => "required",
                "phone" => "required",
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                "ok" => false,
                "msg" => "Registration failed. Please complete all required fields",
                "error" => [
                    "msg" => "Some required fields are missing: " . join(" ", $validator->errors()->all()),
                    "fix" => "Please complete all required fields",
                ]
            ]);
        }

        try {
            $serviceAmt = (int)$request->services;
            $serviceCode = DB::table("services")->where("amount", $request->services)->first()->code;
            $serviceDesc = DB::table("services")->where("amount", $request->services)->first()->desc;

            $amount = str_pad($serviceAmt, 12, '0', STR_PAD_LEFT);

            $transactionId = mt_rand(100000000000, 999999999999);

            $username = env("API_USER");
            $key = env("API_KEY");
            $url = env("APP_URL") . "/appointment";

            $credentials = base64_encode($username . ':' . $key);
            $payload = json_encode([
                "merchant_id" => "TTM-00000002",
                "transaction_id" => $transactionId,
                "desc" => "Payment Using Checkout Page",
                "amount" => $amount,
                "redirect_url" => $url,
                "email" => $request->email
            ]);

            $curl = curl_init("https://checkout-test.theteller.net/initiate");
            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_HTTPHEADER => [
                    "Authorization: Basic " . $credentials,
                    "Cache-Control: no-cache",
                    "Content-Type: application/json",
                ],
                CURLOPT_POSTFIELDS => $payload
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                return response()->json(
                    ["status" => false]
                );
            }
            DB::table("transactions")->insert([
                "amount" => $serviceAmt,
                "transaction" => $transactionId,
                "status" =>  "pending",
                "email" => $request->email,
                "created_at" => date("Y-m-d h:i:s")
            ]);
            DB::table("booking")->insert([
                "amount" => $serviceAmt,
                "service_code" => $serviceCode,
                "booking_code" => $transactionId,
                "status" =>  "pending",
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "booking_date" => $request->date,
                "message" => $request->message
            ]);
            $data = [
                "message" => $request->message,
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "date" => date("jS F Y H:i:s A", strtotime($request->date)),
                "service" => $serviceDesc
            ];
            //TODO::MUST GET THE OFFICIAL MAIL FROM THE ENV FILE
            // info@anewcrosshospital.org
            Mail::to("info@anewcrosshospital.org")->send(new BookingMail($data));
            $res = json_decode($response);
            return response()->json(
                ["status" => true, "data" => $res]
            );
            //code...
        } catch (\Exception $e) {
            return response()->json([
                "ok" => false,
                "error" => [
                    "msg" => "Could not create appointment. {$e->getMessage()} On line {$e->getLine()} {$e->getFile()}",
                    "fix" => "Check the error message for clues",
                ]
            ]);
        }
    }

    public function verifyPayment($code, $transactionId)
    {
        if (!empty($code) && $code == "000") {
            $getStatus = DB::table("booking")->where("booking_code", $transactionId)->first();
            $getTransaction = DB::table("transactions")->where("transaction", $transactionId)->first();
            if ($getStatus->status == "paid" || $getTransaction == "success") {
                return response()->json([
                    "status" => false,
                    "msg" => "Service has already been booked"
                ]);
            }
            DB::table("booking")->where("booking_code", $transactionId)->update([
                "status" => "paid"
            ]);
            DB::table("transactions")->where("transaction", $transactionId)->update([
                "status" => "success"
            ]);

            return response()->json([
                "status" => true,
                "msg" => "Appointment booked successfully"
            ]);
        } else if (!empty($code) && $code == "900") {
            DB::table("booking")->where("booking_code", $transactionId)->update([
                "status" => "not paid"
            ]);
            DB::table("transactions")->where("transaction", $transactionId)->update([
                "status" => "failed"
            ]);
            return response()->json([
                "status" => false,
                "msg" => "Booking has been cancelled!"
            ]);
        } else {

            return response()->json([
                "status" => false,
                "msg" => "Booking could not be completed"
            ]);
        }
    }
}
