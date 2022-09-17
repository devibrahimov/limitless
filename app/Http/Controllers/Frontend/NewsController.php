<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTranslation;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::active()->orderBy('id', 'DESC')->get();
        $newTranslates = NewsTranslation::orderBy('id', 'DESC')->get();
        $slider = Slider::active()->orderBy('id', 'DESC')->first();
        $setting = Setting::orderBy('created_at', 'asc')->first();
        return view('frontend.pages.news', compact('news', 'newTranslates','setting','slider'));
    }

    public function show($id)
    {
        $diff = News::active()->where('id','!=', $id)->get();
        $item = News::findOrFail($id);
        return view('frontend.pages.news_detail', compact('item','diff'));
    }
}