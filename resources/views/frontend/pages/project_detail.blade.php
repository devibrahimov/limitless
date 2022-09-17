@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
@section('keyword')
    {{ !empty($menu['keyword']) ? $menu['transkeyword'] : '' }}
@endsection
@section('description')
    {{ !empty($menu['description']) ? $menu['transdescription'] : '' }}
@endsection
@section('head')
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg)">
        <div class="overlay"></div>
        <div id="particles-js" class="particles-pattern"><canvas class="particles-js-canvas-el"></canvas></div>
        <div class="container">
            <div class="content-box">
                <h1>Project</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- research-details -->
    <section class="research-details">
        <div class="container">
            <div class="research-details-content">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{$item->getFirstMediaUrl('project_image','thumb-large')}}" alt="" /></figure>
                    <div class="lower-content">
                        <div class="content-style-one">
                            <h1>{{ $item->transtitle }}</h1>
                            <div class="text">{{$item->transcontent}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
