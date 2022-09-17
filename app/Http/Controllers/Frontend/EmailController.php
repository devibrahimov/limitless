<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendmail(Request $request){
        $email='info@caspisnet.org';
        $array = [

            'name'=> $request->name,
            'email'=>$request->email,
            'msg'=>$request->msg,
            'number'=>$request->phone,
            'subject'=>$request->subject
        ];

        Mail::send('frontend.pages.email', $array,  function ($message) use($email)  {
            $message->to( $email, 'Caspisnet');
            $message->subject('Caspisnet');

        });

        return redirect()->back();
    }
}