@extends('layouts.backend.master')
@section('title', trans('backend.titles.teams'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'teams', 'id' => $team->id])
                    @include('backend.teams.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'teams', 'id' => ['team' => $team->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
