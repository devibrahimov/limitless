<?php

namespace App\Http\Requests\Backend;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class FormVideoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'status' => $this->has('status') ? '1' : '0',
        ]);
    }

    public function rules()
    {
    //    $active_langs = Cache::rememberForever('active_langs', function () {
    //        return Language::active()->get();
    //    });

       $active_langs = Language::active()->get();

       foreach ($active_langs as $lang){
           $return[] = [
               'title1:' . $lang['code'] => ['required'],
               'title2:' . $lang['code'] => ['required'],
           ];
       }

        // For Store
        $return[] = [
            'link1'=>['string','nullable'],
            'link2'=>['string','nullable'],

//            'image' => 'required',
//            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => ['required'],
        ];


        return Arr::collapse($return);

    }
}
