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
    <section class="page-title centred" style="background-image: url({{asset('frontend')}}/images/background/page-title.jpg)">
        <div class="overlay"></div>
        <div id="particles-js" class="particles-pattern"><canvas class="particles-js-canvas-el"></canvas></div>
        <div class="container">
            <div class="content-box">
                <h1>Projects</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- research-page-section -->
    <section class="research-page-section">
        <div class="container">
            <div class="row">
                @forelse ($projects as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{route('frontend.projects.show',$item->id)}}"><img src="{{$item->getFirstMediaUrl('project_image','thumb-medium')}}"
                                            alt="" /></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="{{route('frontend.projects.show',$item->id)}}">{{$item->transtitle}}</a></h3>
                                    <div class="text">{{Str::limit($item->transcontent,150)}}</div>
                                    <div class="link-btn">
                                        <a href="{{route('frontend.projects.show',$item->id)}}"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
