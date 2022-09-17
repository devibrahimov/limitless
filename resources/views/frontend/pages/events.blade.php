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
                <h1>Events</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Events</li>
                </ul>
            </div>
        </div>
    </section>
    @if (count($events) > 0)
        <!-- events-section -->
        <section class="news-section sec-pad">
            <div class="container">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 col-md-6 col-sm-12 events-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="image-content">
                                            <img src="{{ $event->getFirstMediaUrl('event_image', 'thumb-medium') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="events-title">
                                            <h2>{{ $event->transtitle }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="low-content">
                                            <p>
                                                {{ Str::limit($event->transcontent, 20) }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="events-date">
                                            <p><i class="fas fa-map-marker-alt"></i> {{$event->place}}</p>
                                            <p class=""><i class="fas fa-calendar-alt"></i>{!! date('d M Y', strtotime($event->event_time)) !!}<i
                                                    class="fas fa-check-double"></i> {{$event->type == 1 ? 'Online' : 'Offline'}}</p>
                                        </div>
                                        {{-- <div class="events-date">
                                            <p><i class="fas fa-map-marker-alt"></i> Yasamal</p>
                                            <p><i class="fas fa-calendar-alt"></i> 25 October 2020 <i class="fas fa-check"></i> Offline</p>
                                          </div> --}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="events-right">
                                            <div>
                                                <!-- Button trigger modal -->
                                                <a href="{{ $event->url }}" target="_blank" type="button"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-file-signature"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <div class="btn-link">
                                            <a class="btn btn-primary" href="blog-details.html">
                                                <i class="flaticon-right-arrow"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- events-section end -->
    @endif
@endsection
@section('scripts')
    <script></script>
@endsection
