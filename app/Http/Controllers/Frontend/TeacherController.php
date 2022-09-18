<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function profil(){
        $user = Teacher::where(['id' => auth('teacher')->user()->id])->first();
        return view('frontend.pages.teacher.profil',compact(['user']));
    }

    public function courses(){
        return view('frontend.pages.teacher.courses');
    }


    public function earning(){
        return view('frontend.pages.teacher.earning');
    }



}
