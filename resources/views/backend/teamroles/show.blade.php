@extends('layouts.backend.master')
@section('title', trans('backend.titles.teamroles'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'teamroles', 'id' => $teamrole->id])
                    @include('backend.teamroles.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'teamroles', 'id' => ['teamrole' => $teamrole->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
