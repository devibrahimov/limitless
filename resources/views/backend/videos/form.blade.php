@extends('layouts.backend.master')
@section('title', 'Video')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'slider'])
                    <form action="{{ $edit === false ? route('backend.videos.store') :  route('backend.videos.update', ['video' => $video->id]) }}" method="POST" enctype="multipart/form-data">
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
                                            <label for="title1:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">
                                                Title1 ({{ strtoupper($lang->code) }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="title1:{{ $lang->code }}" type="text" class="form-control @if($errors->has("title1:$lang->code")) is-invalid @endif" name="title1:{{ $lang->code }}" value="{{ isset($video) ? $video->translate($lang->code)->title1 : old('title1:'.$lang->code) }}" placeholder="Title1">
                                                    @if ($errors->has("title1:$lang->code"))
                                                        <div class="invalid-feedback">{{ $errors->first("title1:$lang->code") }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="title2:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">
                                                Title1 ({{ strtoupper($lang->code) }})
                                            </label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="input-group">
                                                    <input id="title2:{{ $lang->code }}" type="text" class="form-control @if($errors->has("title2:$lang->code")) is-invalid @endif" name="title2:{{ $lang->code }}" value="{{ isset($video) ? $video->translate($lang->code)->title2 : old('title2:'.$lang->code) }}" placeholder="Title2">
                                                    @if ($errors->has("title2:$lang->code"))
                                                        <div class="invalid-feedback">{{ $errors->first("title2:$lang->code") }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="text:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                                @lang('backend.labels.description') ({{ strtoupper($lang->code) }})--}}
{{--                                            </label>--}}
{{--                                            <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <textarea id="text:{{ $lang->code }}" type="text" class="form-control @if($errors->has("text:$lang->code")) is-invalid @endif" name="text:{{ $lang->code }}" placeholder="@lang('backend.placeholders.enter.description')"> {{ isset($slider) ? $slider->translate($lang->code)->name : old('name:'.$lang->code) }}</textarea>--}}
{{--                                                    @if ($errors->has("text:$lang->code"))--}}
{{--                                                        <div class="invalid-feedback">{{ $errors->first("text:$lang->code") }}</div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group row">
                                <label for="link1" class="col-form-label text-right col-lg-3 col-sm-12">
                                     Link
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="link1" type="text" class="form-control @error('link1') is-invalid @enderror" name="link1" value="{{ isset($video) ? $video->link1 : old('link1')  }}">
                                        </div>
                                        @error('link1')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link2" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Link2
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="link2" type="text" class="form-control @error('link2') is-invalid @enderror" name="link2" value="{{ isset($video) ? $video->link2 : old('link2')  }}">
                                        </div>
                                        @error('link2')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.status')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                         <span class="switch switch-md switch-icon">
                                             <label>
                                                 <input type="checkbox" class="bool" name="status" value="{{ isset($video) ? $video->status : old('status') }}"  {{ (isset($video) ? old('status',$video->status) : old('status',1) ) == 1 ? 'checked' : '' }}>
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
            </div>
        </div>
    </div>
@endsection
