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
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $slider = Slider::active()->orderBy('id', 'DESC')->first();
        $setting = Setting::orderBy('created_at', 'asc')->first();
        $categories = Category::all();
        $courses = Course::with('translations','level','category')->paginate(5);
        $levels = Level::all();
        return view('frontend.pages.course', compact('setting','slider','categories','courses','levels'));
    }

    public function detail($id)
    {
        $diff = Course::active()->where('id','!=', $id)->get();
        $course = Course::with('translations','level','category')->findOrFail($id);
        return view('frontend.includes.course_detail', compact('course','diff'));
    }


    public function CoursefilterQuery(Request $request)
    {

        $courses = Course::filter()->with('translations','level','category')->paginate(5);
        return view('frontend.includes.courseList',compact('courses'));
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
