<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactFormRequest;

class ContactController extends Controller
{

    public function index()
    {
        return view('frontend.pages.contact');
    }

    public function store(StoreContactFormRequest $request)
    {}

}
