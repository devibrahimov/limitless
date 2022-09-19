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
    <!--Page Title-->
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Blog</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog</li>
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
                @foreach($news as $new)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-inner style-border">
                        <div class="thumb">
                            <img src="{{ $new->getFirstMediaUrl('blog_images','thumb-medium')  ?: $new->image_alt }}" alt="img">
                        </div>
                        <div class="details">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user"></i> BY ADMIN</li>
                                <li><i class="fa fa-calendar-check-o"></i> 28 JANUARY, 2020</li>
                            </ul>
                            <h5><a href="{{ $new->transslug }}">{{ $new->transtitle }}</a></h5>

                            <p>{{$new->content}}</p>
                            <a class="read-more-text" href="{{route('frontend.news.show',$new->id)}}">READ MORE <i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-12 text-center">--}}
{{--                    <nav class="td-page-navigation">--}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li><a class="active" href="#">2</a></li>--}}
{{--                            <li><a href="#">...</a></li>--}}
{{--                            <li><a href="#">3</a></li>--}}
{{--                            <li class="pagination-arrow"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
                                    <div class="col-12 text-center">

                    {!!$news->links('vendor.pagination.limitless-paginate')  !!}
                                    </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
