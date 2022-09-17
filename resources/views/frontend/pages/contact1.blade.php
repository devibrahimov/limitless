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
    <section class="page-title centred"
        style="background-image: url({{ asset('frontend') }}/images/background/page-title.jpg)">
        <div class="overlay"></div>
        <div id="particles-js" class="particles-pattern"><canvas class="particles-js-canvas-el"></canvas></div>
        <div class="container">
            <div class="content-box">
                <h1>Contact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- contact-section -->
    <section class="contact-section sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form method="POST" action="{{ route('frontend.sendmail') }}" id="contact-form"
                            class="default-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Your Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" required />
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone Number" required />
                            </div>
                            <div class="form-group">
                                <textarea name="msg" placeholder="Write here message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn style-two">Submit
                                    Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <div class="top-text">{!! $contact_work_hour !!}</div>
                            <h1>{!! $contact_title !!}</h1>
                        </div>
                        <div class="text">{!! $contact_content !!}</div>
                        <div class="info-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                                    <div class="single-info-box">
                                        <div class="icon-box"><i class="flaticon-location"></i></div>
                                        <div class="text">{!! $contact_location !!}</div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                                    <div class="single-info-box">
                                        <div class="icon-box"><i class="flaticon-contact"></i></div>
                                        <div class="text">
                                            <a href="mailto:info@caspisnet.org">{!! $contact_email !!}</a><br />
                                            <a href="tel:6668880000">{!! $contact_phone !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- map-section -->
    <section class="map-section">
        <div class="google-map-area">
            <div class="google-map" id="contact-google-map" data-map-lat="40.375650" data-map-lng="49.815832"
                data-icon-path="images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                      "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","images/icons/map-marker.png"]
                  }'>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script></script>
@endsection
