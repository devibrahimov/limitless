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
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    @if (count($about_us) > 0)
        <section class="about-us sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <!-- Nav tabs -->
                        <div class="myNav">
                            <ul class="nav nav-tabs md-tabs nav-justified primary-color" role="tablist">
                                @foreach ($about_us as $about)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab"
                                            href="#panel{{ $loop->index }}" role="tab">{{ $about->transtitle }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Nav tabs -->

                        <!-- Tab panels -->
                        <div class="tab-content">
                            <!-- Panel 1 -->
                            @foreach ($about_us as $about)
                                <div class="tab-pane fade in show {{ $loop->first ? 'active' : '' }}"
                                    id="panel{{ $loop->index }}" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p class="pt-5">
                                                {{ $about->transcontent }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="show-more">
                            <a href="{{ route('frontend.about_us', ['lang' => locale()]) }}"><button id="moreInfoAbout">
                                    @lang('frontend.labels.more_info')</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="hr-section">
            <hr />
        </section>
    @endif
@endsection
@section('scripts')
    <script></script>
@endsection
