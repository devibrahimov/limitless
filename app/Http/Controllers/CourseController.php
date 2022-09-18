<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Backend\CategoryController;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\CourseTranslation;
use App\Models\Level;
use App\Models\Setting;
use App\Models\Slider;

class CourseController extends Controller
{
    public function index()
    {
        $slider = Slider::active()->orderBy('id', 'DESC')->first();
        $setting = Setting::orderBy('created_at', 'asc')->first();
        $categories = Category::all();
        $levels = Level::all();
        $courses = Course::with('translations')->paginate(5);
        return view('frontend.pages.course', compact('setting','slider','categories','courses','levels'));
    }

    public function create()
    {}

    public function store(StoreCourseRequest $request)
    {}

    public function show(Course $course)
    {}

    public function edit(Course $course)
    {}

    public function update(UpdateCourseRequest $request, Course $course)
    {}

    public function destroy(Course $course)
    {}
}