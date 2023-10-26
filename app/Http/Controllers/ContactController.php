<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            "message" => $request->message,
            "name" => $request->name,
            "email" => $request->email
        ];
        //TODO::MUST GET THE OFFICIAL MAIL FROM THE ENV FILE
        // info@anewcrosshospital.org
        Mail::to("info@anewcrosshospital.org")->send(new ContactMail($data));
        return redirect('/contact')->with('status', 'Email sent successfully');
    }
}
