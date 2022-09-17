<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSocialLinkRequest;
use App\Http\Requests\UpdateSocialLinkRequest;

class SocialLinkController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreSocialLinkRequest $request)
    {}

    public function show(SocialLink $socialLink)
    {}

    public function edit(SocialLink $socialLink)
    {}

    public function update(UpdateSocialLinkRequest $request, SocialLink $socialLink)
    {}

    public function destroy(SocialLink $socialLink)
    {}
}