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

    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image: url('https://solverwp.com/demo/html/edumint/assets/img/bg/3.png')">
        <div class="container">
            <div class="breadcrumb-inner">
                <div class="section-title mb-0 text-center">
                    <h2 class="page-title">Translation</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Translation</li>
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
                    <form class="signin-inner">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <input type="tel" placeholder="Phone" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-bg-border">
                                    <label for="real-life">
                                        <div class="file-group">
                                            <input type="file" name="image" id="real-life" hidden />
                                            <button type="button" id="custom-button">Choose file</button>
                                            <span id="custom-text">No file chosen</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-30">
                            <div class="col-12 mb-4">
                                <button class="btn btn-base w-100">Send</button>
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
    <script>
        const realFileBtn = document.getElementById("real-life");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function () {
            realFileBtn.click();
        });

        realFileBtn.addEventListener("change", function () {
            if (realFileBtn.value) {
                customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
            } else {
                customTxt.innerHTML = "No file chosen";
            }
        });
    </script>
    <script src="/assets/js/vendor.js"></script>
    <script async="" src="/assets/js/main.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
        integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
@endsection
