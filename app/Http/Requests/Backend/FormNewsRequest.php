<?php

namespace App\Http\Requests\Backend;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class FormNewsRequest extends FormRequest

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
                'content:' . $lang['code'] => ['required'],
                'title:' . $lang['code'] => ['required'],
                'tags:' . $lang['code'] => ['nullable'],
                'slug:' . $lang['code'] => ['required'],
            ];
        }

        // For Store
        $return[] = [
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => ['required'],
        ];

        // For Update
        if ($this->filled('_method') && $this->get('_method') == 'PUT') {
            $return[] = [
                'image' => 'filled',
            ];
        }

        return Arr::collapse($return);

    }

    public function attributes()
    {
        return [
            'image'     => trans('backend.labels.image'),
        ];
    }
}
