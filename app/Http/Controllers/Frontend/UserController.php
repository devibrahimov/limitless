<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){

        return view('frontend.pages.register');
    }

    public function register(Request $request){

        $user = [
            'uuid' =>rand(11111,99999),
            'first_name' =>$request-> name,
            'last_name' => $request->surname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];


        User::insert($user);

    }

}
