<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function sendMail(Request $request)
    {
        try {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required|min:30|max:300'
            ]);




        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

         Mail::to('fadoua@lawfulpaths.co.uk')->send(new ContactUsMail($data));


            return redirect('contact-us#home-contactus')->with('message_suc', "Email Sent Successfully");

        } catch (\Throwable $throwable) {
            $notification = $throwable->getMessage();
            return redirect('contact-us#home-contactus')->with('message_danger', $notification);
        }

    }


    function sendMailIndex(Request $request)
    {
        try {
            $request->validate(
                [
                    'name' => 'required',
                    'email' => 'required|email',
                    'subject' => 'required',
                    'message' => 'required|min:30|max:300'
                ]);


            $data = [
                'email' => $request->email,
                'name' => $request->name,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to('fadoua@lawfulpaths.co.uk')->send(new ContactUsMail($data));


            return redirect('/#home-contactus')->with('message_suc', "Email Sent Successfully");

        } catch (\Throwable $throwable) {
            $notification = $throwable->getMessage();
            return redirect('/#home-contactus')->with('message_danger', $notification);
        }
    }

}
