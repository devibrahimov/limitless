<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormSliderRequest;
use App\Http\Requests\Backend\FormvideoRequest;
use App\Http\Requests\FormCourseRequest;
use App\Http\Requests\FormLessonRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Level;
use App\Models\Slider;
use App\Models\Teacher;
use App\Models\Video;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Language;

class LessonController extends Controller
{
    public function index()
    {

        if (request()->ajax()) {
            return $this->dataTable(Lesson::all());
        }

        return view('backend.lessons.index');
    }

    public function create()
    {
        $edit = false;
        $langs = Language::active()->get();
        $courses =  Course::get();
        $levels =  Level::get();
        $categories =  Category::get();
        return view('backend.lessons.form', compact('edit','langs','courses','levels','categories'));
    }

    public  function store(FormLessonRequest $request, UploadImageService $uploadImageService)
    {
        $course = Lesson::create($request->validated());
        if ($request->hasFile('image')) {
            $uploadImageService->upload($course, 'image', 'lesson_image', false, false);
        }
        return redirect(route('backend.lessons.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show(video $video)
    {
        abort_if(Gate::denies('videos show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('backend.videos.show', compact('video'));
    }

    public function edit(video $video)
    {
        abort_if(Gate::denies('videos edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = true;
        $langs = Language::active()->get();
        return view('backend.videos.form', compact('video', 'edit', 'langs'));
    }

    public function update(FormvideoRequest $request, video $video, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('videos edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $video->update($request->validated());

        if($request->hasFile('image')){
            if (!empty($video->getFirstMedia('video_image'))){
                return redirect()->back()->withWarning(trans('backend.messages.error.removeOldImage'));
            }
            else
            {
                $uploadImageService->upload($video, 'image','video_image',false,false);
                return redirect(route('backend.videos.index'))->withSuccess(trans('backend.messages.success.update'));
            }
        }

        return redirect(route('backend.videos.index'))->withSuccess(trans('backend.messages.success.update'));
    }

    public function destroy(video $video)
    {
        abort_if(Gate::denies('videos delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $video->delete();
            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }

    public function deleteimg(Request $request)
    {
        abort_if(Gate::denies('videos delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $media = Media::findOrFail($request['id']);
            $media->delete();
            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }

    protected function dataTable($data)
    {
        return datatables()
            ->of($data)
//            ->addColumn('image', function (Course $course) {
//                if (isset($course)) {
//                    $src = $course->getFirstMediaUrl('course_image', 'thumb-small') ?: asset('backend/img/noimage.jpg');
//                }
//                return '<img src="' . $src . '" alt="' . $course->transname . '" style="width:50px; object-fit: contain;">';
//            })
            ->addColumn('title', function ($row) {
                return $row->title;
            })
            ->addColumn('status', function ($row) {
                return badge($row->status);
            })
            ->addColumn('actions', function ($row) {
                return $this->permissions($row->id);
            })
            ->rawColumns(['title','status', 'actions'])
            ->make(true);
    }

    protected function permissions($id)
    {
        $class = 'btn btn-sm btn-icon btn-clean';
        $result = '';

//        if (admin()->can('videos show')) {
            $result .= "<a href='" . route('backend.videos.show', ['video' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
//        }

        if (admin()->can('videos edit')) {
            $result .= "<a href='" . route('backend.videos.edit', ['video' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('videos delete')) {
            $result .= "<a href='" . route('backend.videos.destroy', ['video' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
