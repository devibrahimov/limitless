@extends('layouts.backend.master')
@section('title', trans('backend.titles.events'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'events'])
                    <form action="{{ $edit === false ? route('backend.events.store') :  route('backend.events.update', ['event' => $event->id]) }}" method="POST" enctype="multipart/form-data">
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
                                                    <input id="title:{{ $lang->code }}" type="text" class="form-control @if($errors->has("title:$lang->code")) is-invalid @endif" name="title:{{ $lang->code }}" value="{{ isset($event) ? $event->translate($lang->code)->title : old('title:'.$lang->code) }}" placeholder="@lang('backend.placeholders.enter.title')">
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
                                                    <textarea id="content:{{ $lang->code }}" type="text" class="form-control @if($errors->has("content:$lang->code")) is-invalid @endif" name="content:{{ $lang->code }}" placeholder="@lang('backend.placeholders.enter.description')"> {{ isset($event) ? $event->translate($lang->code)->content : old('content:'.$lang->content) }}</textarea>
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
                                    @lang('backend.labels.image')
                                    @if(!$edit)
                                        <span class="text-danger">*</span>
                                    @endif
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image[]" multiple="multiple" accept="image/*">
                                            <label class="custom-file-label">
                                                @lang('backend.placeholders.choose.image')
                                            </label>
                                        </div>
                                        @error('image')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="place" class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.place')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ isset($event) ? $event->place : old('place')  }}">
                                        </div>
                                        @error('place')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.form_url')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ isset($event) ? $event->url : old('url')  }}">
                                        </div>
                                        @error('url')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="event_time" class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.event_time')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="event_time" type="datetime-local" class="form-control @error('event_time') is-invalid @enderror" name="event_time" value="{{ isset($event) ? $event->event_time : old('event_time')  }}">
                                        </div>
                                        @error('event_time')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="type" class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.event_type')
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <select name="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ isset($event) ? $event->type : old('type')  }}" id="campaign_id">
                                            <option value="1">Online</option>
                                            <option value="2">Offline</option>
                                        </select>
                                        @error('type')
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
                                                 <input type="checkbox" class="bool" name="status" value="{{ isset($event) ? $event->status : old('status') }}"  {{ (isset($event) ? old('status',$event->status) : old('status',1) ) == 1 ? 'checked' : '' }}>
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
                    <div class="card-body">
                        @if ($edit)
                            @include('backend.includes.media',[
                                'model' => $event,
                                'name'  => 'event',
                                'media_collection_name'  => 'events_image',
                                'isDeleted' => true,
                                'isCovered' => false,
                            ])
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
