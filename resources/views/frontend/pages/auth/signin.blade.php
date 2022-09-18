@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection

@section('head')
@endsection
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Giriş Et</h2>
                    <ul class="page-list">
                        <li><a href="/">Ana Səhifə</a></li>
                        <li>Giriş Et</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- signin-page-Start -->
    <div class="signin-page-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <form class="signin-inner" action="{{route('frontend.signin')}}" method="post">
                        <div class="row">

                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                            </div>@csrf
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <button  type="submit" class="btn btn-base w-100">Giriş Et</button>
                            </div>

                        </div>
                    </form>
                    <div class="col-12">
                        <a href="#">Şifrəni unuttun ? </a>
                        <a href="{{route('frontend.signup')}}"> <strong>Qeydiyyatdan Keç</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- signin-page-end -->

@endsection
@section('scripts')

@endsection
