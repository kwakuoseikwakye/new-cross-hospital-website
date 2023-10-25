<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            $service = $request->services;

            if ($service == "001") {
                $serviceAmt = "100";
            } else if ($service == "002") {
                $serviceAmt = "75";
            } else if ($service == "003") {
                $serviceAmt = "200";
            } else if ($service == "004") {
                $serviceAmt = "300";
            } else if ($service == "005") {
                $serviceAmt = "500";
            } else {
                return response()->json([
                    'status' => false,
                    'msg' => "Service amount must be provided"
                ]);
            }

            $amount = str_pad($serviceAmt, 12, '0', STR_PAD_LEFT);

            $transactionId = mt_rand(100000000000, 999999999999);
            // return $transactionId;
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

            $res = json_decode($response);
            return response()->json(
                ["status" => "ok", "data" => $res]
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

    public function verifyPayment($code)
    {
        if (!empty($code) && $code == "000") {
            return response()->json([
                "status" => true,
                "msg" => "Appointment Booked Successfully"
            ]);
        } else {
            return response()->json(["status" => false]);
        }
    }
}
