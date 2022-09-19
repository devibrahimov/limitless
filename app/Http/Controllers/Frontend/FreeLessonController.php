<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormCourseRequest;
use App\Http\Requests\FormFreeLessonRequest;
use App\Models\Course;
use App\Models\FreeLesson;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;

class FreeLessonController extends Controller
{
    public function index()
    {}

    public function create()
    {}

    public  function store(FormFreeLessonRequest $request)
    {
        dd($request->validated());
        FreeLesson::create($request->all());
        return redirect(route('frontend.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function destroy($id)
    {}
}