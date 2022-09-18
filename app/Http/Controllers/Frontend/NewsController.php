<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogTranslation;
use App\Models\News;
use App\Models\NewsTranslation;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class NewsController extends Controller
{
//    public function index()
//    {
//        $news = Blog::active()->orderBy('id', 'DESC')->get();
//        $newTranslates = BlogTranslation::orderBy('id', 'DESC')->get();
//        $slider = Slider::active()->orderBy('id', 'DESC')->first();
//        $setting = Setting::orderBy('created_at', 'asc')->first();
//        return view('frontend.pages.news', compact('news', 'newTranslates','setting','slider'));
//    }


    public function index()
    {
        $news = Blog::active()->latest()->paginate(8);

        return view('frontend.pages.news', compact('news'));
    }
    public function show($id)
    {
        $diff = Blog::active()->where('id','!=', $id)->get();
        $item = Blog::findOrFail($id);
        return view('frontend.pages.news_detail', compact('item','diff'));
    }

//    public function show()
//    {
//        return view('frontend.pages.blogs.show');
//    }
}