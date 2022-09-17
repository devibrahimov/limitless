@extends('layouts.backend.master')
@section('title', trans('backend.titles.about-block'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'about-block', 'id' => $slider->id])
                    @include('backend.about-block.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'about-block', 'id' => ['slider' => $slider->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
