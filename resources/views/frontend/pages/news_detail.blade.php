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
                <h1>News Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>News Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- blog-details -->
    <section class="sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image"><img src="{{ $item->getFirstMediaUrl('news_image', 'thumb-large') }}"
                                        alt="" /></figure>
                            </div>
                            <div class="lower-content">
                                <div class="inner">
                                    <h1>{{ $item->transtitle }}</h1>
                                    <div class="text">
                                        <p>{{ $item->transcontent }}</p>
                                    </div>
                                </div>
                                <div class="post-share-option clearfix">
                                    <ul class="tags-list pull-left">
                                        <li>
                                            <h4>Tags:</h4>
                                        </li>
                                        <li><a href="#">Research</a>,</li>
                                        <li><a href="#">Science</a>,</li>
                                        <li><a href="#">Professor</a></li>
                                    </ul>
                                    <ul class="social-links pull-right">
                                        <li>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-post sidebar-widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="post-inner">
                                @forelse ($diff as $item)
                                    <div class="post">
                                        <figure class="image-box">
                                            <a href="{{route('frontend.news.show',$item->id)}}"><img src="{{$item->getFirstMediaUrl('news_image','thumb-small')}}"
                                                    alt="" /></a>
                                        </figure>
                                        <h5><a href="{{route('frontend.news.show',$item->id)}}">{{$item->transtitle}}</a>
                                        </h5>
                                    </div>
                                @empty
                                @endforelse
                            </div>
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
