<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutBlock;
use App\Models\Category;
use App\Models\Menu;
use App\Models\News;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Video;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index()
    {

//        $about_us = AboutBlock::active()->take(3)->get();
        $slider = Slider::active()->orderBy('created_at', 'asc')->first();

        $video = Video::active()->orderBy('created_at', 'asc')->first();
//        $setting = Setting::orderBy('created_at', 'asc')->first();
        $menus = Menu::orderBy('created_at', 'asc')->get();
//        $goals = Goal::active()->take(8)->orderBy('order', 'asc')->get();
//        $teams = Team::active()->take(8)->get();
//        $news = News::with('translation')->active()->take(2)->get();
//        $events = Event::active()->take(3)->get();
//        $partners = Partner::active()->take(3)->orderBy('created_at', 'asc')->get();
//        $projects = Project::active()->take(3)->orderBy('created_at', 'asc')->get();
//
//        $categories =  Category::orderBy('id', 'asc')->where('status', 1)->get();
        return view('frontend.index', compact( 'slider','video' ));
    }
}
