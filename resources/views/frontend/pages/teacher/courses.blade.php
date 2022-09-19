@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
@section('head')
@endsection
@section('content')

    <div class="main-blog-area pd-top-120 pd-bottom-120" style="padding-top: 150px">
        <div class="container">
            <div class="team-details-page">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.pages.teacher.leftbar')

                    </div>
                    <div class="col-lg-9 align-self-center mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-course-inner">
                                    <div class="thumb">
                                        <img src="assets/img/course/1.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <div class="emt-user">
                                                <span class="u-thumb"><img src="assets/img/author/1.png" alt="img"></span>
                                                <span class="align-self-center">Nancy Reyes</span>
                                            </div>
                                            <h6><a href="course-details.html">Fox nymphs grab quick-jived waltz. Brick quiz whangs</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-course-inner">
                                    <div class="thumb">
                                        <img src="assets/img/course/2.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <div class="emt-user">
                                                <span class="u-thumb"><img src="assets/img/author/2.png" alt="img"></span>
                                                <span class="align-self-center">Joe Powell</span>
                                            </div>
                                            <h6><a href="course-details.html">Aenean sed nibh a magna posuere tempo faucib</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-course-inner">
                                    <div class="thumb">
                                        <img src="assets/img/course/3.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="details-inner">
                                            <div class="emt-user">
                                                <span class="u-thumb"><img src="assets/img/author/3.png" alt="img"></span>
                                                <span class="align-self-center">Timothy Willis</span>
                                            </div>
                                            <h6><a href="course-details.html">Praesent eu dolor eu orci vehicula euismod</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
