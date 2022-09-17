<?php

namespace App\Http\Requests\Backend;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class FormAboutBlockRequest extends FormRequest
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
                'title:' . $lang['code'] => ['required'],
                'content:' . $lang['code'] => ['required'],
            ];
        }

        // For Store
        $return[] = [
            'status' => ['required'],
        ];

        // For Update
//        if ($this->filled('_method') && $this->get('_method') == 'PUT') {
//            $return[] = [
//                'image' => 'filled',
//            ];
//        }

        return Arr::collapse($return);

    }

    public function attributes()
    {
        return [
            'image'     => trans('backend.labels.image'),
        ];
    }
}
