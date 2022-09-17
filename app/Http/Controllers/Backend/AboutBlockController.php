<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\FormAboutBlockRequest;
use App\Models\AboutBlock;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutBlockController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('about-block index'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (request()->ajax()) {
            return $this->dataTable(AboutBlock::all());
        }

        return view('backend.about-block.index');
    }

    public function create()
    {
        abort_if(Gate::denies('about-block create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = false;
        $langs = Language::active()->get();
        return view('backend.about-block.form', compact('edit','langs'));
    }

    public function store(FormAboutBlockRequest $request)
    {
        abort_if(Gate::denies('about-block create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        AboutBlock::create($request->validated());

        return redirect(route('backend.about-block.index'))->withSuccess(trans('backend.messages.success.create'));
    }

    public function show(AboutBlock $about_block)
    {
        abort_if(Gate::denies('about-block show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('backend.about-block.show', compact('about_block'));
    }

    public function edit(AboutBlock $about_block)
    {
        abort_if(Gate::denies('about-block edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $edit = true;
        $langs = Language::active()->get();
        return view('backend.about-block.form', compact('about_block', 'edit', 'langs'));
    }

    public function update(FormAboutBlockRequest $request, AboutBlock $about_block)
    {
        abort_if(Gate::denies('about-block edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $about_block->update($request->validated());

        return redirect(route('backend.about-block.index'))->withSuccess(trans('backend.messages.success.update'));
    }

    public function destroy(AboutBlock $about_block)
    {
        abort_if(Gate::denies('about-block delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        try {
            $about_block->delete();
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
            ->addColumn('title', function ($row) {
                return $row->title;
            })
            ->addColumn('status', function ($row) {
                return badge($row->status);
            })
            ->addColumn('actions', function ($row) {
                return $this->permissions($row->id);
            })
            ->rawColumns(['title', 'status', 'actions'])
            ->make(true);
    }

    protected function permissions($id)
    {
        $class = 'btn btn-sm btn-icon btn-clean';
        $result = '';

        if (admin()->can('about-block show')) {
            $result .= "<a href='" . route('backend.about-block.show', ['about_block' => $id]) . "'";
            $result .= " class='$class'><i class='la la-eye'></i></a>";
        }

        if (admin()->can('about-block edit')) {
            $result .= "<a href='" . route('backend.about-block.edit', ['about_block' => $id]) . "'";
            $result .= " class='$class'><i class='la la-edit'></i></a>";
        }

        if (admin()->can('about-block delete')) {
            $result .= "<a href='" . route('backend.about-block.destroy', ['about_block' => $id]) . "'";
            $result .= " class='$class btn-delete'><i class='la la-trash'></i></a>";
        }

        return $result;
    }
}
