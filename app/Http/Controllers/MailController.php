<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Dotenv\Util\Regex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Email;

class MailController extends Controller
{
    public function sendEmail(Request $request) 
    {
        $validate = $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            // 'subject'=>'required|string|max:500',
            'message'=>'required|max:2000',
        ]);

        $email = new Email();
        $email->name = $request->name;
        $email->email = $request->email;
        $email->subject_id = $request->subject_id;
        $email->message = $request->message;
        $email->save();

        $details = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $email->subjects->subject,
            "message" => $request->message,        
        ];

        Mail::to("monnaie.florence@gmail.com")->send(new TestMail($details));

        return redirect()->back();
    }
}
