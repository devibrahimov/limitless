@extends('layouts.backend.master')
@section('title', trans('backend.titles.categories'))
@section('styles')
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'categories'])
                    <form action="{{ $edit === false ? route('backend.categories.store') : route('backend.categories.update', ['category' => $category->id])  }}" method="POST" enctype="multipart/form-data">
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
{{--                            <div class="tab-content mt-5">--}}
{{--                                @foreach ($langs as $lang)--}}
{{--                                    <div class="tab-pane fade @if($loop->first) active show @endif" id="{{ $lang->code }}" role="tabpanel" aria-labelledby="tab-{{ $lang->code }}">--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="name:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                                @lang('backend.labels.name') ({{ strtoupper($lang->code) }})--}}
{{--                                                <span class="text-danger">*</span>--}}
{{--                                            </label>--}}
{{--                                            <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input id="name:{{ $lang->code }}" type="text" class="form-control @if($errors->has("name:$lang->code")) is-invalid @endif"  name="name:{{ $lang->code }}" value="{{ isset($category) ? $category->translate($lang->code)->name : old('name:'.$lang->code) }}" placeholder="@lang('backend.placeholders.enter.name')">--}}
{{--                                                    @if ($errors->has("name:$lang->code"))--}}
{{--                                                        <div class="invalid-feedback">{{ $errors->first("name:$lang->code") }}</div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group row">--}}
{{--                                            <label for="slug:{{ $lang->code }}" class="col-form-label text-right col-lg-3 col-sm-12">--}}
{{--                                                @lang('backend.labels.slug') ({{ strtoupper($lang->code) }})--}}
{{--                                            </label>--}}
{{--                                            <div class="col-lg-6 col-md-9 col-sm-12">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input id="slug:{{ $lang->code }}" type="text" class="form-control @if($errors->has("slug:$lang->code")) is-invalid @endif"name="slug:{{ $lang->code }}" value="{{ isset($category) ? $category->translate($lang->code)->slug : old('slug:'.$lang->code) }}" placeholder="@lang('backend.placeholders.enter.slug')">--}}
{{--                                                    @if ($errors->has("slug:$lang->code"))--}}
{{--                                                        <div class="invalid-feedback">{{ $errors->first("slug:$lang->code") }}</div>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                            <div class="form-group row">
                                <label for="name" class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.name')
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="name" type="text" class="form-control @if($errors->has("name")) is-invalid @endif"  name="name" value="{{ isset($category) ? $category->name : old('name') }}" placeholder="@lang('backend.placeholders.enter.name')">
                                        @if ($errors->has("name"))
                                            <div class="invalid-feedback">{{ $errors->first("name") }}</div>
                                        @endif
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
                                                 <input  type="checkbox" class="bool" name="status" value="{{ old('status','1') }}"  {{   old('status',$category->status ?? '1') == 1 ? 'checked' : '' }}>
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
@section('scripts')
    <script>
        let key_az = document.querySelector('.tagify-az');
        let key_en = document.querySelector('.tagify-en');
        let key_ru = document.querySelector('.tagify-ru');

        new Tagify(key_az);
        new Tagify(key_en);
        new Tagify(key_ru);

        $('.summernote').summernote({
            height:300,
            imageAttributes: {
                icon: '<i class="note-icon-pencil"/>',
                figureClass: 'figureClass',
                figcaptionClass: 'captionClass',
                captionText: 'Caption Goes Here.',
                manageAspectRatio: true
            },
            lang: 'en-US',
            popover: {
                image: [
                    ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                    ['float', ['floatLeft', 'floatRight', 'floatNone']],
                    ['remove', ['removeMedia']],
                    ['custom', ['imageAttributes']],
                ],
            },
        });
    </script>
@endsection
