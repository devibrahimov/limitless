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
    <section class="page-title centred" style="background-image: url({{asset('frontend')}}/images/background/page-title.jpg)">
        <div class="overlay"></div>
        <div id="particles-js" class="particles-pattern"><canvas class="particles-js-canvas-el"></canvas></div>
        <div class="container">
            <div class="content-box">
                <h1>Team</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Teams</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Professor-page-section -->
    <section class="Professor-page-section">
        <div class="container">
            <div class="team-block-area">
                <div class="row">
                    @forelse ($teams as $item)
                        <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                            <div class="single-team-block wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-holder">
                                        <figure class="image">
                                            <a href="{{route('frontend.teams.show',$item->id)}}"><img src="{{$item->getFirstMediaUrl('team_image','thumb-medium')}}"
                                                    alt="" /></a>
                                        </figure>
                                        <ul class="social-links clearfix">
                                            <li>
                                                <a target="_blank" href="{{$item->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="lower-content">
                                        <h4><a href="professor-details.html">{{$item->name}}</a></h4>
                                        <div class="designation">{{$item->position}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
