@extends('layouts.backend.master')
@section('title', trans('backend.titles.about-block'))
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'about-block'])
                    <form action="{{ $edit === false ? route('backend.about-block.store') :  route('backend.about-block.update', ['about_block' => $about_block->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <ul class="nav nav-light-primary nav-pills" role="tablist">
                                        @foreach ($langs as $lang)
                                            <li class="nav-item">
                                                <a class="nav-link @if($loop->first) active @endif" id="tab-{{ $lang->code }}" data-toggle="tab" href="#{{ $lang->code }}">
                                                    <span class="nav-text">{{ $lang->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                @foreach ($langs as $lang)
                                    <div class="tab-pane fade @if($loop->first) active show @endif" id="{{ $lang->code }}" role="tabpanel" aria-labelledby="tab-{{ $lang->code }}">
                                        <div class="form-group row">
                                            <label for="title:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">
                                                @lang('backend.labels.title') ({{ strtoupper($lang->code) }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="title:{{ $lang->code }}" type="content" class="form-control @if($errors->has("title:$lang->code")) is-invalid @endif" name="title:{{ $lang->code }}" value="{{ isset($about_block) ? $about_block->translate($lang->code)->title : old('name:'.$lang->code) }}" placeholder="@lang('backend.placeholders.enter.name')">
                                                    @if ($errors->has("title:$lang->code"))
                                                        <div class="invalid-feedback">{{ $errors->first("title:$lang->code") }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="content:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">
                                                @lang('backend.labels.description') ({{ strtoupper($lang->code) }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <textarea id="content:{{ $lang->code }}" type="content" class="form-control @if($errors->has("content:$lang->code")) is-invalid @endif" name="content:{{ $lang->code }}" placeholder="@lang('backend.placeholders.enter.description')"> {{ isset($about_block) ? $about_block->translate($lang->code)->content : old('name:'.$lang->code) }}</textarea>
                                                    @if ($errors->has("content:$lang->code"))
                                                        <div class="invalid-feedback">{{ $errors->first("content:$lang->code") }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.status')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                         <span class="switch switch-md switch-icon">
                                             <label>
                                                 <input type="checkbox" class="bool" name="status" value="{{ isset($slider) ? $slider->status : old('status') }}"  {{ (isset($slider) ? old('status',$slider->status) : old('status',1) ) == 1 ? 'checked' : '' }}>
                                                 <span></span>
                                             </label>
                                         </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('backend.includes.form.footer')
                    </form>
                </div>
                <div class="card">
{{--                    <div class="card-body">--}}
{{--                        @if ($edit)--}}
{{--                            @include('backend.includes.media',[--}}
{{--                                'model' => $about_block,--}}
{{--                                'name'  => 'about-block',--}}
{{--                                'media_collection_name'  => 'slider_image',--}}
{{--                                'isDeleted' => true,--}}
{{--                                'isCovered' => false,--}}
{{--                            ])--}}
{{--                        @endif--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
