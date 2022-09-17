<?php

namespace App\Http\Middleware;

use App\Models\Language;
use App\Models\Menu;
use App\Models\News;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class AppMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $settings = collect(Setting::with('translations')->get());
        $active_langs = Cache::rememberForever('active_langs', function () {
            return Language::active()->get();
        });
        $contact_title= $settings->where('name','contact_title')->first()['content'] ?? '';
        $contact_content= $settings->where('name','contact_content')->first()['content'] ?? '';
        $contact_work_hour= $settings->where('name','work_hour')->first()['content'] ?? '';
        $contact_phone= $settings->where('name','phone')->first()['content'] ?? '';
        $contact_email= $settings->where('name','email')->first()['content'] ?? '';
        $contact_location= $settings->where('name','location')->first()['content'] ?? '';
        $default_langs = Cache::rememberForever('default_langs', function () {
            return optional(Language::default()->first())->code ?? config('app.locale');
        });

        $menus = Menu::parentList()->get();
        $footer_photo = Menu::find(8);
        $news = News::with('translation')->active()->take(2)->get();

        View::share([
            'request' => $request,
            'settings'=> $settings,
            'langs' => $active_langs,
            'default_langs'   => $default_langs,
            'default_lang'   => config('app.locale'),
            'locale'   => config('app.locale'),
//            'auth' => user(),
//            'authinfo' => user() ? user()->info : [],
            'menus' => $menus,
            'footer_photo' =>$footer_photo,
            'news'=>$news,
            'contact_title'=>$contact_title,
            'contact_content'=>$contact_content,
            'contact_work_hour'=>$contact_work_hour,
            'contact_phone'=>$contact_phone,
            'contact_location'=>$contact_location,
            'contact_email'=>$contact_email,
        ]);

        return $next($request);
    }
}
