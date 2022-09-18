@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection

@section('head')
@endsection
@section('content')
    <!--Page Title-->
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Qeydiyyat</h2>
                    <ul class="page-list">
                        <li><a href="/">Ana Səhifə</a></li>
                        <li>Qeydiyyat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- signup-page-Start -->
    <div class="signup-page-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <form class="signin-inner" action="{{route('frontend.signup')}}" method="post">

                        <div class="row">
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Ad"  name="name"/>
                                </div>
                            </div>
                            @csrf
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Soyad"  name="surname"/>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="+994 77 329 42 62" name="phone" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="email" placeholder="email@gmial.com"  name="email"/>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="*******" name="password" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="*******"name="password_confirmation" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-checkbox-inner">
                                    <input type="checkbox" required />
                                  Qeyd olunnan məlumatların doğruluğunu təstiqləyirəm
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <button type="submit"  class="btn btn-base w-100">Qeydiyyat</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- signup-page-end -->
@endsection
@section('scripts')

@endsection
