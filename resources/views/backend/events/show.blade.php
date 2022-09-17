@extends('layouts.backend.master')
@section('title', trans('backend.titles.events'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'events', 'id' => $event->id])
                    @include('backend.events.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'events', 'id' => ['event' => $event->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
