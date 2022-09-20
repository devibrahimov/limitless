<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserAuthController extends Controller
{

    public function signup(){
        return view('frontend.pages.auth.register');
    }

    public function register(Request $request){
        $user = [
            'uuid' =>rand(11111,99999),
            'first_name' =>$request-> name,
            'last_name' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password
        ];

     $userregister =    User::create($user);
        $email =  $request->email ;
        $array = [
            'first_name' =>$request-> name,
            'last_name' => $request->surname,
            'url' => route('frontend.accessUserProfil',['prefix' => encrypt(['id' => $userregister->id ,'email' => $email,'first_name' =>$request->name]) ])
        ];

        Mail::send('frontend.pages.auth.accessEmail', $array, function($message) use($email){
            $message->to( $email, 'Limitless');
            $message->subject('Limitless');
        });
        return view('frontend.pages.auth.signin');

    }

    public  function accessUserProfil($prefix){
        $user = decrypt($prefix);
        User::where(['id' => $user['id']])->where(['email' => $user['email']])
            ->where(['first_name' => $user['first_name']])->update(['status' => 1]);

        return redirect()->route('frontend.home');

    }


    public function signin(){

        return view('frontend.pages.auth.signin');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ],[
            'email.required'=>'Email alanını boş bırakamazsınız',
            'email.email'=>'Email alanını email yazılım kurallarına uymuyor',
            'password.required'=>'Email alanını boş bırakamazsınız'
        ]);

        if ( $a = auth()->attempt(['email'=>$request->email, 'password'=> $request->password, 'status' => 1]) ){
            request()->session()->regenerate();

            return redirect()->route('frontend.home') ;
        }else{

            $errors = ['email'=>'Yanlış giriş məlumatları'];
         return back()->withErrors($errors);
        }

    }



    public function logout(Request $request){
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();
        return redirect()->route('frontend.home');
    }

}
