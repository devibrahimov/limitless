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
                <h1>Our goals</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Our goals</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- research-fields -->
    <section class="research-fields sec-pad">
        <div class="container">
            <div class="sec-title text-center">
                <!-- <div class="top-text">Areas of Research</div> -->

                <p>The list of SDG GOALS conforming to the CAPISNET WG’s are the following</p>
            </div>
            <div class="row">
              @forelse ($goals as $item)
                <div class="all-goals col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-4 col-lg-4 col-xl-4">
                                <div class="all-img">
                                    <div class="goals-img">
                                        <img src="{{$item->getFirstMediaUrl('goal_image','thumb-small')}}" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="back-img">
                                        <img src="./images/goals/E_PRINT_INVERTED_02.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                                <div class="goals-title">
                                    <h5 class="card-title">{{$item->transtitle}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="goals-body">
                                    <p class="goals-text">{{$item->transcontent}}</p>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
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
