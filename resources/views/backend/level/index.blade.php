@extends('layouts.backend.master')
@section('title', 'Level')
@section('styles')
    @css('backend/css/sweetalert.min.css')
    @css('backend/css/datatables.bundle.css')
@endsection
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.card.header', ['page' => 'levels'])
                    @include('backend.level.tables.index')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @js('backend/js/sweetalert.min.js')
    @js('backend/js/datatables.bundle.js')
    @include('backend.includes.plugins.datatable',['columns'=>['id','name','status','actions'], 'route'=>route('backend.levels.index')])
@endsection
