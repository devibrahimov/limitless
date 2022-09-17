<?php

namespace App\Http\Controllers;

use App\Models\CourseCurriculum;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseCurriculumRequest;
use App\Http\Requests\UpdateCourseCurriculumRequest;

class CourseCurriculumController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public function store(StoreCourseCurriculumRequest $request)
    {}

    public function show(CourseCurriculum $courseCurriculum)
    {}

    public function edit(CourseCurriculum $courseCurriculum)
    {}

    public function update(UpdateCourseCurriculumRequest $request, CourseCurriculum $courseCurriculum)
    {}

    public function destroy(CourseCurriculum $courseCurriculum)
    {}
}