@extends('layouts.backend.master')
@section('title', trans('backend.titles.projects'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'projects', 'id' => $project->id])
                    @include('backend.projects.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'projects', 'id' => ['project' => $project->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
