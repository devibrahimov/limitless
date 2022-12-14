@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
{{--@section('keyword')--}}
{{--    {{ !empty($menu['keyword']) ? $menu['transkeyword'] : '' }}--}}
{{--@endsection--}}
{{--@section('description')--}}
{{--    {{ !empty($menu['description']) ? $menu['transdescription'] : '' }}--}}
{{--@endsection--}}
@section('head')
@endsection
@section('content')
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Contact Us</h2>
                    <ul class="page-list">
                        <li><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact list start -->
    <div class="contact-list pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/img/icon/17.png" alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Phone</h5>
                                <p>{{\App\Models\Setting::with('translations')->where('name','phone')->first()['content'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/img/icon/18.png" alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Email</h5>
                                <p>{{\App\Models\Setting::with('translations')->where('name','email')->first()['content'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-list-inner">
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/img/icon/16.png" alt="img">
                            </div>
                            <div class="media-body align-self-center">
                                <h5>Our Address</h5>
                                <p>{{\App\Models\Setting::with('translations')->where('name','location')->first()['content'] ?? ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact list end -->

    <!-- counter area start -->
    <div class="counter-area pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title mb-0">
                        <h6 class="sub-title right-line">Get in touch</h6>
                        <h2 class="title">Write Us a Message</h2>
                        <p class="content pb-3">{{\App\Models\Setting::with('translations')->where('name','work_hour')->first()['content'] ?? ''}}</p>
                        <ul class="social-media style-base pt-3">
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form class="contact-form-inner  mt-5 mt-md-0" action="{{route('frontend.sendmail')}}" method="post">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Name Surname" name="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Phone" name="phone">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>
                            @csrf
                            <div class="col-6">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <textarea placeholder="Message" name="msg"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-base">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- counter area end -->

    <!-- contact area start -->
    <div class="contact-g-map">
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"></iframe>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
