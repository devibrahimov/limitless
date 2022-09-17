<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormEventRequest;
use App\Models\Language;
use App\Models\Event;
use App\Services\MediaLibrary\UploadImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller{
    public function index()
    {
        abort_if(Gate::denies('event index'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            return $this->dataTable(Event::all());
        }

        return view('backend.events.index');
    }

    public function create()
    {
        abort_if(Gate::denies('event create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = false;
        $langs = Language::active()->get();
        return view('backend.events.form', compact('edit','langs'));
    }

    public function store(FormEventRequest $request, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('event create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event = Event::create($request->validated());

        if ($request->hasFile('image')) {
            $uploadImageService->upload($event, 'image', 'event_image', false, false);
        }

        return redirect(route('backend.events.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('backend.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = true;
        $langs = Language::active()->get();
        return view('backend.events.form', compact('event', 'edit', 'langs'));
    }

    public function update(FormEventRequest $request, Event $event, UploadImageService $uploadImageService)
    {
        abort_if(Gate::denies('event edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->update($request->validated());

        if($request->hasFile('image')){
            if (!empty($event->getFirstMedia('event_image'))){
                return redirect()->back()->withWarning(trans('backend.messages.error.removeOldImage'));
            }
            else
            {
                $uploadImageService->upload($event, 'image','event_image',false,false);
                return redirect(route('backend.events.index'))->withSuccess(trans('backend.messages.success.update'));
            }
        }

        return redirect(route('backend.events.index'))->withSuccess(trans('backend.messages.success.update'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $event->delete();
            return response(['status' => 1]);
        } catch (\Exception $e) {
            Log::channel('backend')->error($e->getMessage());
            return response(['status' => 0]);
        }
    }

    public function deleteimg(Request $request)
    {
        abort_if(Gate::denies('event delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            ->addColumn('image', function (Event $event) {
                if (isset($event)) {
                    $src = $event->getFirstMediaUrl('event_image', 'thumb-small') ?: asset('backend/img/noimage.jpg');
                }
                return '<img src="' . $src . '" alt="' . $event->transname . '" style="width:50px; object-fit: contain;">';
            })
            ->addColumn('title', function ($row) {
                return $row->title;
            })
            ->addColumn('event_time', function ($row) {
                return $row->event_time;
            })
            ->addColumn('place', function ($row) {
                return $row->event_time;
            })
            ->addColumn('type', function ($row) {
                return $row->event_time;
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

        if (admin()->can('event show')) {
            $result .= "<a href='" . route('backend.events.show', ['event' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('event edit')) {
            $result .= "<a href='" . route('backend.events.edit', ['event' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('event delete')) {
            $result .= "<a href='" . route('backend.events.destroy', ['event' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
