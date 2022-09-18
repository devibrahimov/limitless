@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
{{--@section('keyword')--}}
{{--    {{ !empty($menu['keyword']) ? $menu['transkeyword'] : '' }}--}}
{{--@endsection--}}
{{--@section('description')--}}
{{--    {{ !empty($menu['description']) ? $menu['transdescription'] : '' }}--}}
{{--@endsection--}}
@section('head')
@endsection
@section('content')
    <!--Page Title-->
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Courses</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Courses</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-12">
                    <div class="row">
                        @foreach($courses as $course)
                        <div class="col-md-6">
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" />
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="u-thumb"><img src="assets/img/author/1.png" alt="img" /></span>
                                            <span class="align-self-center">{{$course->title}}</span>
                                        </div>
                                        <h6><a href="course-details.html">{{$course->content}}</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {!!$courses->links('vendor.pagination.limitless-paginate')  !!}

                </div>
                <div class="col-lg-4 order-lg-1 col-12">
                    <div class="td-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>
                            <ul class="catagory-items">
                                <li>
                                    <a href="#">All</a>
                                </li>
                              @foreach($categories as $category)
                                    <li>
                                        <a href="#">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_checkbox_list">
                            <h4 class="widget-title">Level</h4>
                            @foreach($levels as $level)
                                <label class="single-checkbox">
                                    <input type="checkbox" />
                                    <span class="checkmark"></span>
                                    {{$level->name}}
                                </label>

                            @endforeach
                        </div>
                        <div class="widget widget_range">
                            <h4 class="widget-title">Price</h4>
                            <span class="multi-range">
                  <input type="range" min="0" max="1000" value="250" id="lower" />
                  <input type="range" min="0" max="1000" value="750" id="upper" />
                </span>
                            <span class="input-texts">
                  <input type="number" id="lowNum" placeholder="min" value="" />

                  <input type="number" id="upNum" placeholder="max" value="" />
                </span>
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
