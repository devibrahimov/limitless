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
                    <h2 class="page-title">Blog Details</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-page-content">
                        <div class="single-blog-inner">
                            <div class="thumb justify-content-center d-flex">
                                <img
                                        src="{{ $item->getFirstMediaUrl('blog_images','thumb-medium') }}"
                                        alt="img"
                                />
                            </div>
                            <div class="details">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> BY ADMIN</li>
                                    <li><i class="fa fa-calendar-check-o"></i> 28 JANUARY, 2020</li>
                                </ul>
                                <h3 class="title">{{$item->title}}</h3>
                                <p>
                                    {{$item->content}}
                                </p>
{{--                                <blockquote>--}}
{{--                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam--}}
{{--                                    erat, sed diam.--}}
{{--                                    <h6 class="mb-0 mt-2">Marilyn Gilbert</h6>--}}
{{--                                </blockquote>--}}
                            </div>
                        </div>
                        <div class="tag-and-share">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6>Related Tags :</h6>
                                    <div class="tags">
                                        <a href="#">{{$item->keywords}}, </a>
                                        <a href="#">Inttero, </a>
                                        <a href="#">Estario</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-sm-right">
                                    <div class="blog-share">
                                        <h6>Share :</h6>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="blog-comment">--}}
{{--                            <div class="section-title style-small">--}}
{{--                                <h3>Comments</h3>--}}
{{--                            </div>--}}
{{--                            <div class="media">--}}
{{--                                <a href="#">--}}
{{--                                    <img--}}
{{--                                            src="https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"--}}
{{--                                            alt="comment"--}}
{{--                                    />--}}
{{--                                </a>--}}
{{--                                <div class="media-body">--}}
{{--                                    <h5>--}}
{{--                                        <a href="#">Aaron Holmes</a>--}}
{{--                                        <span class="date">25 July 2020</span>--}}
{{--                                    </h5>--}}
{{--                                    <p>--}}
{{--                                        Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed,--}}
{{--                                        ultricies--}}
{{--                                    </p>--}}
{{--                                    <a href="#">REPLY</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="media nesting">--}}
{{--                                <a href="#">--}}
{{--                                    <img--}}
{{--                                            src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"--}}
{{--                                            alt="comment"--}}
{{--                                    />--}}
{{--                                </a>--}}
{{--                                <div class="media-body">--}}
{{--                                    <h5>--}}
{{--                                        <a href="#">Aaron Holmes</a>--}}
{{--                                        <span class="date">25 July 2020</span>--}}
{{--                                    </h5>--}}
{{--                                    <p>Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus</p>--}}
{{--                                    <a href="#">REPLY</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="media border-0">--}}
{{--                                <a href="#">--}}
{{--                                    <img--}}
{{--                                            src="https://images.unsplash.com/photo-1488426862026-3ee34a7d66df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"--}}
{{--                                            alt="comment"--}}
{{--                                    />--}}
{{--                                </a>--}}
{{--                                <div class="media-body">--}}
{{--                                    <h5>--}}
{{--                                        <a href="#">Aaron Holmes</a>--}}
{{--                                        <span class="date">25 July 2020</span>--}}
{{--                                    </h5>--}}
{{--                                    <p>--}}
{{--                                        Proin ac quam et lectus vestibulum blandit. Nunc maximus nibh at placerat tincidunt. Nam sem lacus, ornare non ante sed,--}}
{{--                                        ultricies--}}
{{--                                    </p>--}}
{{--                                    <a href="#">REPLY</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <form class="blog-comment-form">--}}
{{--                            <div class="mb-3">--}}
{{--                                <h3 class="mb-0">Leave a Reply</h3>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="single-input-inner style-bg-border">--}}
{{--                                        <input type="text" placeholder="Name" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="single-input-inner style-bg-border">--}}
{{--                                        <input type="text" placeholder="Email" />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="single-input-inner style-bg-border">--}}
{{--                                        <textarea placeholder="Message"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <button class="btn btn-base">Post Comment</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
