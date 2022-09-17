<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutBlock;
use Illuminate\Http\Request;

class AboutBlockController extends Controller
{
    public function index()
    {
        $about_us = AboutBlock::active()->take(3)->get();
        return view('frontend.pages.about_us', compact('about_us'));

    }
}
