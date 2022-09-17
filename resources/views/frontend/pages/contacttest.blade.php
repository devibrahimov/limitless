@extends('layouts.frontend.master')
@section('title')
@endsection
@section('keyword')
@endsection
@section('description')
@endsection
@section('head')
@endsection
@section('content')
    <!-- INNER BANNER STARTS
       ========================================================================= -->
    <div style="background-image: url();" class="inner-banner title-area text-center image-7">
        <div class="container title-area-content">
            <h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">title</h1>
            <h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">description</h2>
            <div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
            <div class="bread-crumb"><a href="#">Home</a> <span>title</span></div>
        </div>
    </div>
    <!-- /. INNER BANNER STARTS
                          ========================================================================= -->
    <div class="white-bg">
        <!-- GET IN TOUCH STARTS
                              ========================================================================= -->
        <div class="container contact-us">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="block">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="caption">Ünvan</div>
                        <div class="line"></div>
                        @foreach ($settings as $setting)
                            @if($setting->name == 'address')
                                <div class="description">{!! $setting->content !!}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="block">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="caption">Telefon nömrəsi</div>
                        <div class="line"></div>
                        @foreach ($settings as $setting)
                            @if($setting->name == 'phone1')
                                <div class="description"> {!! $setting->content !!}</div>
                            @elseif($setting->name == 'phone2')
                                <div class="description"> {!! $setting->content !!}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="block">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="caption">Email Address</div>
                        <div class="line"></div>
                        @foreach ($settings as $setting)
                            @if($setting->name == 'email')
                        <div class="description">
                            <a href="mailto:{!! $setting->content !!}">{!! $setting->content !!}</a>
                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Map Starts -->
        <div class="container-fluid">
            <div class="row no-gutter-12">
                <div class="col-lg-12 maps animated" data-animation="fadeInUp" data-animation-delay="400">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25215.625657884106!2d144.956637!3d-37.81456500000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sus!4v1435061406583"
                        height="400" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- Google Map Ends -->
        <div class="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="herotext">
                            <p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
                                <span>Get in Touch</span>
                            </p>
                            <div class="description animated" data-animation="fadeInUp" data-animation-delay="600">
                                One morning, when Gregor Samsa woke from troubled dreams, he found himself<br/>transformed
                                in his bed into a horrible vermin.
                            </div>
                        </div>
                    </div>
                </div>
                <form action="contactform.php" method="post" name="ContactForm" id="ContactForm">
                    <div class="row animated" data-animation="fadeInUp" data-animation-delay="800">
                        <div class="col-lg-6 col-lg-offset-3 center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Full Name *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                            </div>
                            <div class="form-group">
                                <textarea rows="5" class="form-control" name="comment"
                                          placeholder="Message *"></textarea>
                            </div>
                            <div id="message_post"></div>
                            <input class="btn btn-default" type="submit" value="SUBMIT" name="submitf" id="submitf"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /. GET IN TOUCH ENDS
                              ========================================================================= -->
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
