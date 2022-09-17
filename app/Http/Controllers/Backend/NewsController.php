<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormNewsRequest;
use App\Models\Language;
use App\Models\News;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('news index'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            return $this->dataTable(News::all());
        }

        return view('backend.news.index');
    }

    public function create()
    {
        abort_if(Gate::denies('news create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = false;
        $langs = Language::active()->get();
        return view('backend.news.form', compact('edit','langs'));
    }

    public function store(FormNewsRequest $request, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('news create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news = News::create($request->validated());

        if ($request->hasFile('image')) {
            $uploadImageService->upload($news, 'image', 'news_image', false, false);
        }

//        if ($request->hasFile('image2')) {
//            $uploadImageService->upload($news, 'image2', 'news_gallery', true, false);
//        }

        return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show(News $news)
    {
        abort_if(Gate::denies('news show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('backend.news.show', compact('news'));
    }

    public function edit(News $news)
    {
        abort_if(Gate::denies('news edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = true;
        $langs = Language::active()->get();
        return view('backend.news.form', compact('news', 'edit', 'langs'));
    }

    public function update(FormNewsRequest $request, News $news, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('news edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $news->update($request->validated());

        if($request->hasFile('image')){
            if (!empty($news->getFirstMedia('news_image'))){
                return redirect()->back()->withWarning(trans('backend.messages.error.removeOldImage'));
            }
            else
            {
                $uploadImageService->upload($news, 'image','news_image',false,false);
                return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.update'));
            }
        }

        if($request->hasFile('image2')){
            $uploadImageService->upload($news, 'image2','news_gallery',true,false);
            return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.update'));
        }

        return redirect(route('backend.news.index'))->withSuccess(trans('backend.messages.success.update'));
    }

    public function destroy(News $news)
    {
        abort_if(Gate::denies('news delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $news->delete();
            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }

    public function deleteimg(Request $request)
    {
        abort_if(Gate::denies('news delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            ->addColumn('image', function (News $news) {
                if (isset($news)) {
                    $src = $news->getFirstMediaUrl('news_image', 'thumb-small') ?: asset('backend/img/noimage.jpg');
                }
                return '<img src="' . $src . '" alt="' . $news->transname . '" style="width:50px; object-fit: contain;">';
            })
            ->addColumn('title', function ($row) {
                return $row->title;
            })
            ->addColumn('created_at', function ($row) {
                return $row->created_at;
            })
            ->addColumn('status', function ($row) {
                return badge($row->status);
            })
            ->addColumn('actions', function ($row) {
                return $this->permissions($row->id);
            })
            ->rawColumns(['image', 'title', 'created_at', 'status', 'actions'])
            ->make(true);
    }

    protected function permissions($id)
    {
        $class = 'btn btn-sm btn-icon btn-clean';
        $result = '';

        if (admin()->can('news show')) {
            $result .= "<a href='" . route('backend.news.show', ['news' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('news edit')) {
            $result .= "<a href='" . route('backend.news.edit', ['news' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('news delete')) {
            $result .= "<a href='" . route('backend.news.destroy', ['news' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
