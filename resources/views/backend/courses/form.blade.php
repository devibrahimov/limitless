@extends('layouts.backend.master')
@section('title', 'Course')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'course'])
                    <form action="{{ $edit === false ? route('backend.courses.store') :  route('backend.courses.update', ['video' => $video->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="card-body">
{{--                            <div class="form-group row">--}}
{{--                                <label class="col-form-label text-right col-lg-3 col-sm-12"></label>--}}
{{--                                <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                    <ul class="nav nav-light-primary nav-pills" role="tablist">--}}
{{--                                        @foreach ($langs as $lang)--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link @if($loop->first) active @endif" id="tab-{{ $lang->code }}" data-toggle="tab" href="#{{ $lang->code }}">--}}
{{--                                                    <span class="nav-text">{{ $lang->name }}</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-content">--}}
{{--                                @foreach ($langs as $lang)--}}
{{--                                    <div class="tab-pane fade @if($loop->first) active show @endif" id="{{ $lang->code }}" role="tabpanel" aria-labelledby="tab-{{ $lang->code }}">--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="title:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                                Title ({{ strtoupper($lang->code) }})--}}
{{--                                            </label>--}}
{{--                                            <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input id="title:{{ $lang->code }}" type="text" class="form-control @if($errors->has("title:$lang->code")) is-invalid @endif" name="title:{{ $lang->code }}" value="{{ isset($course) ? $course->translate($lang->code)->title : old('title:'.$lang->code) }}" placeholder="Title">--}}
{{--                                                    @if ($errors->has("title:$lang->code"))--}}
{{--                                                        <div class="invalid-feedback">{{ $errors->first("title:$lang->code") }}</div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="content:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                                @lang('backend.labels.description') ({{ strtoupper($lang->code) }})--}}
{{--                                            </label>--}}
{{--                                            <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <textarea id="content:{{ $lang->code }}" type="text" class="form-control @if($errors->has("content:$lang->code")) is-invalid @endif" name="content:{{ $lang->code }}" placeholder="@lang('backend.placeholders.enter.description')"> {{ isset($course) ? $course->translate($lang->code)->content : old('content:'.$lang->code) }}</textarea>--}}
{{--                                                    @if ($errors->has("content:$lang->code"))--}}
{{--                                                        <div class="invalid-feedback">{{ $errors->first("content:$lang->code") }}</div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                            <div class="form-group row">
                                <label for="price" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Price
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ isset($course) ? $course->price : old('price')  }}">
                                        </div>
                                        @error('price')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lecture" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Lectures
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="lecture" type="text" class="form-control @error('lecture') is-invalid @enderror" name="lecture" value="{{ isset($course) ? $course->lecture : old('lecture')  }}">
                                        </div>
                                        @error('lecture')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Teacher
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" name="user_id">
                                            <option value="" disabled>None</option>
                                            @foreach($teachers as $key => $teacher)
                                                <option value="{{ $teacher->id }}" {{ old($teacher->first_name) == $teacher->id ? "selected" : "" }}
                                                @if(isset($course->user_id) && $teacher->id == $value) selected @endif >{{ $teacher->first_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Level
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" name="level_id">
                                            <option value="" disabled>None</option>
                                            @foreach($levels as $key => $level)
                                                <option value="{{ $level->id }}" {{ old($level->name) == $level->id ? "selected" : "" }}
                                                @if(isset($course->level_id) && $level->id == $value) selected @endif >{{ $level->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Category
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" name="category_id">
                                            <option value="" disabled>None</option>
                                            @foreach($categories as $key => $category)
                                                <option value="{{ $category->id }}" {{ old($category->name) == $category->id ? "selected" : "" }}
                                                @if(isset($course->category_id) && $category->id == $value) selected @endif >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                    @lang('backend.labels.image')--}}
{{--                                    @if(!$edit)--}}
{{--                                        <span class="text-danger">*</span>--}}
{{--                                    @endif--}}
{{--                                </label>--}}
{{--                                <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <div class="custom-file">--}}
{{--                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image[]" multiple="multiple" accept="image/*">--}}
{{--                                            <label class="custom-file-label">--}}
{{--                                                @lang('backend.placeholders.choose.image')--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                        @error('image')--}}
{{--                                        <div class="invalid-feedback d-block">{{ $message }}</div>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}


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
