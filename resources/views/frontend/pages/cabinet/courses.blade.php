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
                        <div class="sidebar">
                            <div class="thumb position-relative">
                                <label for="image">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="img">
                                    <div class="overlay"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <input type="file" id="image">
                                </label>
                                <h4 style="text-align: center; margin-top: 30px">Jane Mileston</h4>
                            </div>
                            <div>
                                @include('frontend.pages.cabinet.leftbar')
                            </div>
                        </div>
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
