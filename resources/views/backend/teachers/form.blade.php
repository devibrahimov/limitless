@extends('layouts.backend.master')
@section('title', 'Teachers')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'teachers'])
                    <form action="{{ $edit === false ? route('backend.teachers.store') : route('backend.teachers.update', ['teachers' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="first_name" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Ad
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="first_name" type="text" class="form-control @if($errors->has("first_name")) is-invalid @endif" name="first_name" value="{{ isset($teacher) ? $teacher->first_name : old('first_name') }}" placeholder="Ad">
                                        @if ($errors->has("first_name"))
                                            <div class="invalid-feedback">{{ $errors->first("first_name") }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Soyad
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="last_name" type="text" class="form-control @if($errors->has("last_name")) is-invalid @endif" name="last_name" value="{{ isset($teacher) ? $teacher->last_name : old('last_name') }}" placeholder="Soyad">
                                        @if ($errors->has("last_name"))
                                            <div class="invalid-feedback">{{ $errors->first("last_name") }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Telefon
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="phone" type="text" class="form-control @if($errors->has("phone")) is-invalid @endif" name="phone" value="{{ isset($teacher) ? $teacher->phone : old('phone') }}" placeholder="Telefon">
                                        @if ($errors->has("phone"))
                                            <div class="invalid-feedback">{{ $errors->first("phone") }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Email
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="email" type="email" class="form-control @if($errors->has("email")) is-invalid @endif" name="email" value="{{ isset($teacher) ? $teacher->email : old('email') }}" placeholder="Email">
                                        @if ($errors->has("email"))
                                            <div class="invalid-feedback">{{ $errors->first("email") }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-form-label text-right col-lg-3 col-sm-12">
                                    Password
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="password" type="text" class="form-control @if($errors->has("password")) is-invalid @endif" name="password" value="{{ isset($teacher) ? $teacher->password : old('password') }}" placeholder="Password">
                                        @if ($errors->has("password"))
                                            <div class="invalid-feedback">{{ $errors->first("password") }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.image')
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input id="image" type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image[]" multiple accept="image/*">
                                            <label for="image" class="custom-file-label">
                                                @lang('backend.placeholders.choose.image')
                                            </label>
                                        </div>
                                        <div class="invalid-feedback d-block">{{ $errors->has("image") ? $errors->first("image") : $errors->first("image.*") }}</div>
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
                                                 <input type="checkbox" class="bool" name="status" value="{{ isset($blog) ? $blog->status : old('status') }}"  {{ (isset($blog) ? old('status',$blog->status) : old('status',1) ) == 1 ? 'checked' : '' }}>
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
                                'model' => $teacher,
                                'name'  => 'teachers',
                                'media_collection_name'  => 'teacher_images',
                                'isDeleted' => true,
                                'isCovered' => true,
                            ])
                        @endif
                    </div>
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

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');

    </script>
@endsection
