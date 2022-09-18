<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function profil(){
        $user = User::where(['id' => auth()->user()->id])->first();
        return view('frontend.pages.cabinet.profil',compact(['user']));
    }

    public function courses(){
        return view('frontend.pages.cabinet.courses');
    }


    public function results(){
        return view('frontend.pages.cabinet.results');
    }



}
