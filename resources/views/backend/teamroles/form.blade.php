@extends('layouts.backend.master')
@section('title', trans('backend.titles.teamroles'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom example example-compact">
                    @include('backend.includes.form.header', ['page' => 'teamroles'])
                    <form action="{{ $edit === false ? route('backend.teamroles.store') : route('backend.teamroles.update', ['teamrole' => $teamrole->id]) }}" method="POST">
                        @csrf
                        @if($edit)
                            @method('PUT')
                        @endif
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name"
                                    class="col-form-label text-right col-lg-3 col-sm-12">
                                    @lang('backend.labels.name')
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="input-group">
                                        <input id="name" type="text"
                                            class="form-control @if ($errors->has("name")) is-invalid @endif"
                                            name="name"
                                            value="{{ isset($teamrole) ? $teamrole->name : old('name') }}"
                                            placeholder="@lang('backend.placeholders.enter.name')">
                                        @if ($errors->has("name"))
                                            <div class="invalid-feedback">
                                                {{ $errors->first("name") }}</div>
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
                                                 <input type="checkbox" class="bool" name="status" value="{{ isset($teamrole) ? $teamrole->status : old('status') }}"  {{ (isset($teamrole) ? old('status',$teamrole->status) : old('status',1) ) == 1 ? 'checked' : '' }}>
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
@endsection
