<?php

namespace App\Http\Controllers;

use App\Models\CourseCurriculumTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseCurriculumTranslationRequest;
use App\Http\Requests\UpdateCourseCurriculumTranslationRequest;

class CourseCurriculumTranslationController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreCourseCurriculumTranslationRequest $request)
    {}

    public function show(CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function edit(CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function update(UpdateCourseCurriculumTranslationRequest $request, CourseCurriculumTranslation $courseCurriculumTranslation)
    {}

    public function destroy(CourseCurriculumTranslation $courseCurriculumTranslation)
    {}
}