@extends('layouts.backend.master')
@section('title', 'Video')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'videos', 'id' => $video->id])
                    @include('backend.videos.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'videos', 'id' => ['video' => $video->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
