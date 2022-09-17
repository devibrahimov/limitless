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
                <h1>Partners</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Partners</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="client-section">
        <div class="container">
            <div class="row">
                @forelse ($partners as $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 partner-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="partner-logo">
                                        <img src="{{$item->getFirstMediaUrl('partner_image','thumb-small')}}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="partner-title">
                                        <h5 class="card-title">{{$item->transtitle}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="partner-about">
                                        <p class="card-text">{{$item->transcontent}}</p>
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
