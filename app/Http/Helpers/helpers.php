<?php

use App\Models\{Category, Language, Setting};
use Illuminate\Config\Repository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\UrlGenerator;

if (! function_exists('locale'))
{
    /**
     * @return string
     */
    function locale(): string
    {
        return app()->getlocale();
    }
}

if (! function_exists('get_credit_price'))
{
    /**
     * @param $price
     * @param $initial_price
     * @param $month
     * @return float|int
     */
    function get_credit_price($price, $initial_price, $month): float|int
    {
        return ($price - $initial_price) + (($price - $initial_price) * $month / 100);
    }
}

if (! function_exists('get_monthly_payment'))
{
    /**
     * @param $price
     * @param $initial_price
     * @param $month
     * @return float|int
     */
    function get_monthly_payment($price, $initial_price, $month): float|int
    {
        return get_credit_price($price, $initial_price, $month) / $month;
    }
}

if (! function_exists('social_links')) {
    function social_links(){
        $return = '';

        $settings = collect(Setting::with('translations')->get());

        foreach($settings as $setting)
        {
            if($setting->name == 'facebook'){
              $return.='<li><a href="'. $setting->slug .'"><i class="fa fa-facebook"></i></a></li>';
            }

            if($setting->name =='instagram'){
                $return.='<li><a href="'. $setting->slug .'"><i class="fa fa-instagram"></i></a></li>';
            }

            if($setting->name =='whatsapp'){
                $return.='<li><a href='. $setting->slug .'""><i class="fa fa-whatsapp"></i></a></li>';
            }
        }


        return $return;
    }
}

if (! function_exists('admin'))
{
    /**
     * @return Authenticatable|null
     */
    function admin(): ?Authenticatable
    {
        return auth('admin')->user();
    }
}

if (! function_exists('customer'))
{
    function customer()
    {
        return auth()->user();
    }
}

if (! function_exists('short_name'))
{
    /**
     * @return string
     */
    function short_name(): string
    {
        $array = explode(' ', admin()->name);

        if (count($array) < 2)
        {
            return strtoupper($array[0][0]);
        }

        return strtoupper($array[0][0]) . strtoupper($array[1][0]);
    }
}

if (! function_exists('notify'))
{
    /**
     * @param $type
     * @param $message
     * @return string
     */
    function notify($type, $message): string
    {
        return  "Swal.fire(
                {
                    icon:  '$type',
                    title: '$message',
                    showConfirmButton: false,
                    timer: 3000
                });";
    }
}

if (! function_exists('confirm'))
{
    /**
     * @return string
     */
    function confirm(): string
    {
        return  "Swal.fire(
                {
                    title: '" . trans('backend.mixins.are_you_sure') . "',
                    text:  '" . trans('backend.mixins.wont_revert')  . "',
                    icon:  'warning',
                    showCancelButton:   true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor:  '#d33',
                    confirmButtonText:  '" . trans('backend.buttons.delete') . "',
                    cancelButtonText:   '" . trans('backend.buttons.cancel') . "'
                })";
    }
}


if (!function_exists('ipfind')) {
    /**
     * @return mixed
     */
    function ipfind(): mixed
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }
        return $ip;
    }
}

if(! function_exists('badge'))
{
    /**
     * @param $value
     * @return string
     */
    function badge($value): string
    {
        if ($value)
        {
            return '<span class="label label-lg label-inline label-light-success">' . trans('backend.mixins.active') . '</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">' . trans('backend.mixins.passive') . '</span>';
    }
}

if (! function_exists('prepare_for_createMany'))
{
    /**
     * @param $key
     * @param $array
     * @return array
     */
    function prepare_for_createMany($key, array $array = []): array
    {
        $result = [];

        foreach ($array as $item)
        {
            $result[] = [$key => $item];
        }

        return $result;
    }
}

if (! function_exists('image_url'))
{
    /**
     * @param $name
     * @return string
     */
    function image_url($name): string
    {
        return asset("uploads/$name");
    }
}

if (! function_exists('lang_url'))
{
    /**
     * @param $locale
     * @return string|UrlGenerator|Application
     */
    function lang_url($locale): string|UrlGenerator|Application
    {
        $url = request()->segments();
        array_shift($url);
        $segments = implode('/', $url);

        return url("$locale/$segments");
    }
}

if (! function_exists('current_lang'))
{
    /**
     * @return mixed|string
     */
    function current_lang()
    {
        $result = '';

        foreach (active_langs() as $lang)
        {
            if (locale() === $lang->code)
            {
                $result = $lang->name;
                break;
            }
        }

        return $result;
    }
}

if (! function_exists('active_langs'))
{
    /**
     * @return mixed
     */
    function active_langs(): mixed
    {
        return Language::active()->get();
    }
}

if (! function_exists('default_lang'))
{
    /**
     * @return Repository|Application|mixed
     */
    function default_lang()
    {
        return optional(Language::default()->first())->code ?? config('app.locale');
    }
}

if (! function_exists('created_for_blog'))
{
    /**
     * @param $datetime
     * @return string
     */
    function created_for_blog($datetime): string
    {
        $date = explode(' ', $datetime)[0];
        $mon  = explode('-', $date)[1];
        $day  = explode('-', $date)[2];

        return "<b>$day</b> " . trans("frontend.months.$mon");
    }
}

if (! function_exists('setting'))
{
    function setting($name)
    {
        $setting = Setting::whereName($name)->first();
        return $setting ? optional($setting->translate(locale()))->content ?? '' : '';
    }
}

if (! function_exists('category_tree'))
{
    /**
     * @return string
     */
    function category_tree(): string
    {
        $cats = Category::with('childrens')->parent()->active()->get();
        $html = '<ul class="megamenu">';

        foreach ($cats as $cat1)
        {
            $html .= '<li class="item-vertical with-sub-menu hover">';
            $html .= '<p class="close-menu"></p>';
            $html .= '<a href="' . url(locale() . '/category/' . $cat1->slug) . '" class="clearfix">';
            $html .= '<span>' . $cat1->translate(locale())->name . '</span>';

            if ($cat1->childrens->count())
            {
                $html .= '<b class="fa-angle-right"></b>';
            }

            $html .= '</a>';

            if ($cat1->childrens->count())
            {
                $html .= '<div class="sub-menu" data-subwidth="60">';
                $html .= '<div class="content">';
                $html .= '<div class="row">';
                $html .= '<div class="col-sm-12">';
                $html .= '<div class="row">';

                foreach ($cat1->childrens as $cat2)
                {
                    $html .= '<div class="col-md-4 static-menu">';
                    $html .= '<div class="menu">';
                    $html .= '<ul>';
                    $html .= '<li>';
                    $html .= '<a href="' . url(locale() . '/category/' . $cat1->slug . '/' . $cat2->slug) . '" class="main-menu">' . $cat2->translate(locale())->name . '</a>';

                    if ($cat2->childrens->count())
                    {
                        $html .= '<ul>';

                        foreach ($cat2->childrens as $cat3)
                        {
                            $html .= '<li><a href="' . url(locale() . '/category/' . $cat1->slug . '/' . $cat2->slug . '/' . $cat3->slug) . '">' . $cat3->translate(locale())->name . '</a></li>';
                        }

                        $html .= '</ul>';
                    }

                    $html .= '</li>';
                    $html .= '</ul>';
                    $html .= '</div>';
                    $html .= '</div>';
                }

                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
            }

            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}

if (! function_exists('switcher_languages'))
{
    /**
     * @return array
     */
    function switcher_languages(): array
    {
        $result = array();

        foreach (active_langs() as $lang)
        {
            if (locale() !== $lang->code)
            {
                $result[] = $lang;
            }
        }

        return $result;
    }
}
