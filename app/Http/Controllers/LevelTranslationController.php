<?php

namespace App\Http\Controllers;

use App\Models\LevelTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelTranslationRequest;
use App\Http\Requests\UpdateLevelTranslationRequest;

class LevelTranslationController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreLevelTranslationRequest $request)
    {}

    public function show(LevelTranslation $levelTranslation)
    {}

    public function edit(LevelTranslation $levelTranslation)
    {}

    public function update(UpdateLevelTranslationRequest $request, LevelTranslation $levelTranslation)
    {}

    public function destroy(LevelTranslation $levelTranslation)
    {}
}