<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactFormRequest;
use App\Http\Requests\UpdateContactFormRequest;

class ContactFormController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreContactFormRequest $request)
    {}

    public function show(ContactForm $contactForm)
    {}

    public function edit(ContactForm $contactForm)
    {}

    public function update(UpdateContactFormRequest $request, ContactForm $contactForm)
    {}

    public function destroy(ContactForm $contactForm)
    {}
}