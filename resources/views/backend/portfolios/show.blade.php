@extends('layouts.backend.master')
@section('title', trans('backend.titles.portfolios'))
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="card card-custom">
                    @include('backend.includes.table.header', ['page' => 'portfolios', 'id' => $portfolio->id])
                    @include('backend.portfolios.tables.show')
                    @include('backend.includes.table.footer', ['page' => 'portfolios', 'id' => ['portfolio' => $portfolio->id]])
                </div>
            </div>
        </div>
    </div>
@endsection
