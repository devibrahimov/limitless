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
    <!-- INNER BANNER STARTS
                   ========================================================================= -->
    <div style="background-image: url({{$menu->getFirstMediaUrl('background_images','thumb-large')}});" class="inner-banner title-area text-center image-4">
        <div class="container title-area-content">
            <h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">{{$menu->transtitle}}</h1>
            <h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">{{$menu->transdescription}}</h2>
            <div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
            <div class="bread-crumb"><a href="/">Home</a> <span>{{$menu->transtitle}}</span></div>
        </div>
    </div>
    <!-- /. INNER BANNER STARTS
                                      ========================================================================= -->
    <div class="white-bg">
        <!-- ABOUT US STARTS
                                          ========================================================================= -->
        <div class="container about-us" id="about">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
                        <p class="box-heading">
                            <span>{{$menu->transtitle}}</span>
                        </p>
                    </div>
                    <div class="description animated" data-animation="fadeInDown" data-animation-delay="800">
                            {!!$menu->transtext!!}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 animated" data-animation="fadeIn" data-animation-delay="600">
                    <img src="{{$menu->getFirstMediaUrl('about_images','thumb-large')}}"
                        class="img-responsive center-block" alt="" />
                </div>
            </div>
        </div>
        <!-- /. ABOUT US ENDS
                                          ========================================================================= -->
        <!-- OUR TEAM STARTS
                                          ========================================================================= -->
        <div class="our-team" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="herotext">
                            <p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
                                <span>Meet our Chef</span>
                            </p>
                            <div class="description animated" data-animation="fadeInUp" data-animation-delay="600">
                                One morning, when Gregor Samsa woke from troubled dreams, he found himself<br />transformed
                                in his bed into a horrible vermin.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Block Starts -->
                    @if (!empty($chefs))
                        @foreach ($chefs as $chef)
                            <div class="col-lg-3 col-md-3 col-sm-6 animated" data-animation="fadeIn"
                                data-animation-delay="800">
                                <div class="block">
                                    <div class="picture">
                                        <img src="{{$chef->getFirstMediaUrl('chef_images','thumb-medium')}}"
                                            class="img-responsive center-block" alt="" />
                                    </div>
                                    <div class="name"><a href="">{{$chef->name}}</a></div>
                                    <div class="designation">{{$chef->position}}</div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <!-- Block Starts -->
                </div>
            </div>
        </div>
        <!-- /. OUR TEAM ENDS
                                          ========================================================================= -->
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
