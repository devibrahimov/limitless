<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class FormCourseRequest extends FormRequest
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

//        $active_langs = Language::active()->get();

//        foreach ($active_langs as $lang){
//            $return[] = [
//                'title:' . $lang['code'] => ['nullable'],
//                'content:' . $lang['code'] => ['nullable'],
//            ];
//        }

        // For Store
        $return[] = [
//            'link'=>['string','nullable'],
//            'image' => 'nullable',
//            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           'level_id'       => 'required|integer|exists:levels,id',
           'price'       => 'nullable|integer',
           'lectures'       => 'nullable|integer',
           'teacher_id'       => 'required|integer|exists:teachers,id',
           'category_id'       => 'required|integer|exists:categories,id',
            'status' => ['nullable'],
        ];

        // dd($return);
        // For Update
//        if ($this->filled('_method') && $this->get('_method') == 'PUT') {
//            $return[] = [
//                'image' => 'filled',
//            ];
//        }

        return Arr::collapse($return);

    }

//    public function attributes()
//    {
//        return [
//            'image'     => trans('backend.labels.image'),
//        ];
//    }
}
