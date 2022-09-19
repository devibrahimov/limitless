<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Models\Translation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TranslationController extends Controller
{

    public function index()
    {
        return view('frontend.pages.translation');
    }


    public function sendTranslation(Request $request){
        $email='baylar95i@gmail.com';



        $uploadedFile = $request->file('file');
        $filename = time().rand(11111,213123123).'.'.$uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('translations/'.$filename));


        $array = [

            'first_name'=> $request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>'translations'
        ];

        Mail::send('frontend.pages.email_translation', $array,  function ($message) use($email,$filename)  {
            $message->to( $email, 'Limitless');
            $message->subject('translations');
            $message->attach(public_path('translations/'.$filename));
        });


    }



    public function create()
    {}

    public function store(StoreTranslationRequest $request)
    {}

    public function show(Translation $translation)
    {}

    public function edit(Translation $translation)
    {}

    public function update(UpdateTranslationRequest $request, Translation $translation)
    {}

    public function destroy(Translation $translation)
    {}
}
