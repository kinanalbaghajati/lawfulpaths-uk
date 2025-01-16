<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function sendMail(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required|min:30|max:300'
            ]);
            Mail::to('fadoua@lawfulpaths.co.uk')->send(new ContactMail(['email' => $request->email, 'name' => $request->name, 'message' => $request->message , 'subject'=>$request->subject]));

            return redirect('contact-us#home-contactus')->with('message_suc', "Email Sent Successfully");

        } catch (\Throwable $throwable) {
            $notification = $throwable->getMessage();
            return redirect('contact-us#home-contactus')->with('message_danger', $notification);
        }

    }

}
