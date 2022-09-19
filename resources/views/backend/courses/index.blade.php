@extends('layouts.backend.master')
@section('title', 'Course')
@section('styles')
    @css('backend/css/sweetalert.min.css')
    @css('backend/css/datatables.bundle.css')
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Course</h3>
                        </div>
                        {{--    @can("$page create")--}}
                        <div class="card-toolbar">
                            <a href="{{ route("backend.courses.create") }}" class="btn btn-primary font-weight-bolder">
                                <i class="la la-plus"></i> @lang('backend.buttons.create')
                            </a>
                        </div>
                        {{--    @endcan--}}
                    </div> @include('backend.courses.tables.index')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @js('backend/js/sweetalert.min.js')
    @js('backend/js/datatables.bundle.js')
    @include('backend.includes.plugins.datatable',['columns'=>['id','first_name','price','status','actions'], 'route'=>route('backend.courses.index'), 'pageLength'=>10])
@endsection
