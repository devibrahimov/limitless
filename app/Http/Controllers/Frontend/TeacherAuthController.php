<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherAuthController extends Controller
{


    public function signin(){
        return view('frontend.pages.auth.teacher_signin');
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
        if ( $a = auth()->guard('teacher')->attempt(['email'=>$request->email,'password'=> $request->password]) ){
            request()->session()->regenerate();

         return redirect()->intended('/') ;
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
