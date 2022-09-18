<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Models\Translation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;

class TranslationController extends Controller
{

    public function index()
    {
        return view('frontend.pages.translation');
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
