<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormBlogRequest;
use App\Http\Requests\Backend\FormTeacherRequest;
use App\Models\Blog;
use App\Models\Teacher;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TeacherController extends Controller
{

    public function index()
    {
//        abort_if(Gate::denies('blogs index'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax())
        {
            $limit = request('length');
            $start = request('start');
            $count = Teacher::count();
            $data = Teacher::latest()->offset($start)->limit($limit)->get();

            return $this->dataTable($data, $count);
        }

        return view('backend.teachers.index');
    }

    public function create()
    {
//        abort_if(Gate::denies('blogs create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = false;

        return view('backend.teachers.form',compact('edit'));
    }

    public function store(FormTeacherRequest $request, UploadImageService $uploadImageService)
    {
//        abort_if(Gate::denies('blogs store'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        Teacher::create($request->validated());
        try {
            DB::transaction(function () use ($request, $uploadImageService) {
                $teacher = Teacher::create($request->validated());

                if ($request->hasFile('image')) {
                    $teacher->addMediaFromRequest('image')->toMediaCollection('teacher_images');
                }

            });
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
        }

        return redirect(route('backend.teachers.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show(Blog $blog)
    {
        abort_if(Gate::denies('blogs show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('backend.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        abort_if(Gate::denies('blogs edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = true;
        return view('backend.blogs.form', compact('blog', 'edit'));
    }

    public function update(FormBlogRequest $request, Blog $blog, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('blogs update'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blog->update($request->validated());

        if ($request->hasFile('image')) {
            $blog->addMediaFromRequest('image')->toMediaCollection('blog_images');
        }

        return redirect(route('backend.blogs.index'))->withSuccess(trans('backend.messages.success.update'));
    }

    public function destroy(Blog $blog)
    {
        abort_if(Gate::denies('blogs destroy'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try
        {
            DB::transaction(function () use ($blog)
            {
                $blog->delete();
            });

            return response(['status' => 1]);
        }

        catch (\Exception $e)
        {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }

    public function coverimg(Request $request)
    {
        try {
            // Refresh the media custom_properties
            Media::where('collection_name', 'blog_images')->where('custom_properties', '<>', '[]')->update(['custom_properties' => []]);

            $media = Media::findOrFail($request['id']);

            $media->hasCustomProperty('coverImage')
                ?
                $media->forgetCustomProperty('coverImage')
                :
                $media->setCustomProperty('coverImage', 'true');

            $media->save();

            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }


    public function deleteimg(Request $request)
    {
        abort_if(Gate::denies('blogs delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $media = Media::findOrFail($request['id']);

            $media->delete();

            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }


    public function dataTable($data, $count)
    {
        return datatables()
            ->of($data)
//            ->addColumn('image', function($row)
//            {
//                $src = $row->getFirstMediaUrl('teacher_images','thumb-small') ?: asset('backend/img/noimage.jpg');
//
//                return '<img src="'.$src.'" alt="'.$row->transname.'" style="width:26px; object-fit: contain;">';
//            })
            ->addColumn('first_name', function($row)
            {
                return Str::limit($row->first_name, 60);
            })
            ->addColumn('last_name', function($row)
            {
                return Str::limit($row->last_name, 60);
            })
            ->addColumn('email', function($row)
            {
                return Str::limit($row->email, 60);
            })
            ->addColumn('status', function($row)
            {
                return badge($row->status);
            })
            ->addColumn('created_at', function($row)
            {
                return $row->created_at->format('d-m-Y H:i:s');
            })
            ->addColumn('actions', function($row)
            {
                return $this->permissions($row->id);
            })
            ->rawColumns(['first_name','last_name','email','status', 'actions'])
            ->skipPaging()
            ->setTotalRecords($count)
            ->setFilteredRecords($count)
            ->make(true);
    }

    public function permissions($id): string
    {
        $class  = 'btn btn-sm btn-icon btn-clean';
        $result = '';

        if (admin()->can('blogs show'))
        {
            $result .= "<a href='" . route('backend.blogs.show', ['blog' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('blogs edit'))
        {
            $result .= "<a href='" . route('backend.blogs.edit', ['blog' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('blogs delete'))
        {
            $result .= "<a href='" . route('backend.blogs.destroy', ['blog' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
