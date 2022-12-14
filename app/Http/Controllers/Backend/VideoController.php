<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormvideoRequest;
use App\Models\Video;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Language;

class VideoController extends Controller
{
    public function index()
    {

        if (request()->ajax()) {
            return $this->dataTable(Video::all());
        }

        return view('backend.videos.index');
    }

    public function create()
    {

        $edit = false;
        $langs = Language::active()->get();
        return view('backend.videos.form', compact('edit','langs'));
    }

    public function store(FormVideoRequest $request)
    {
        $video = Video::create($request->validated());

        return redirect(route('backend.videos.index'))->withSuccess(trans('backend.messages.success.create'));
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
            ->addColumn('link1', function ($row) {
                return $row->link1;
            })
            ->addColumn('link2', function ($row) {
                return $row->link2;
            })
            ->addColumn('status', function ($row) {
                return badge($row->status);
            })
            ->addColumn('actions', function ($row) {
                return $this->permissions($row->id);
            })
            ->rawColumns(['link1','link1','status', 'actions'])
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
