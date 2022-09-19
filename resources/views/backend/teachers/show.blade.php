@extends('layouts.backend.master')
@section('title', trans('backend.titles.blogs'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'teachers', 'id' => $teaher->id])
                    @include('backend.blogs.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'teachers', 'id' => ['teachers' => $teaher->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
