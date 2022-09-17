@extends('layouts.frontend.master')
@section('title')
    Edumint - Edumint LMS &amp; Online Courses Html Template
@endsection
@section('keyword')
    Edumint - Edumint LMS &amp; Online Courses Html Template
@endsection
@section('description')
    Edumint - Edumint LMS &amp; Online Courses Html Template
@endsection
@section('head')
@endsection
@section('content')
    @include('frontend.includes.banner')
    @include('frontend.includes.about')
    <div class="contact-area bg-overlay mt-200 pd-bottom-90"
         style="background-image: url('/demo/react/edumint/assets/img/banner/2.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form class="contact-form-inner mt-mn-100 style-shadow">
                        <div class="section-title">
                            <h2 class="title">Register for 2 free trial</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-input-inner"><input type="text" placeholder="Full name"/></div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-inner"><input type="text" placeholder="Phone Number"/></div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-inner"><input type="text" placeholder="Email Address"/></div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input-inner"><input type="password" placeholder="Password"/></div>
                            </div>

                            <div class="col-sm-12 text-sm-right"><a class="btn btn-base" href="#">Send Message</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

