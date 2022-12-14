@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
@section('head')
@endsection
@section('content')

    <div class="main-blog-area pd-top-120 pd-bottom-120" style="padding-top: 150px">
        <div class="container">
            <div class="team-details-page">
                <div class="row">
                    <div class="col-lg-3">
                        @include('frontend.pages.cabinet.leftbar')
                    </div>
                    <div class="col-lg-9 align-self-center mt-5 mt-lg-0">
                        <div class="row justify-content-end">
                            <a href=""><i class="edit fa-regular fa-pen-to-square" style="font-size: 24px; cursor: pointer"></i></a>
                        </div>
                        <div class="details">
                            <h3><span class="first-name">{{$user->first_name}}</span> <span class="last-name">{{$user->last_name}}</span></h3>
                            <!-- <span class="designation">Design Expert</span> -->
                            <h6 style="margin-top: 10px">Mail</h6>
                            <span class="email">{{$user->email}}</span>
                            <h6 style="margin-top: 10px">Phone</h6>
                            <span class="phone">{{$user->phone}}</span>
                            <h6 style="margin-top: 10px">Level</h6>
                            <span class="level">Elementary</span>
{{--                            <h6 style="margin-top: 10px">Description</h6>--}}
{{--                            <p class="mt-3 desc">--}}
{{--                                The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick--}}
{{--                                quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox.--}}
{{--                                Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew--}}
{{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <form class="form-edit">
                <div class="row">
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                    <div class="col-12">
                        <h5>About</h5>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="text" placeholder="First Name" class="first-name" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="text" placeholder="Last Name" class="last-name" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="text" placeholder="Email" class="email" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="tel" placeholder="Phone" class="phone" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Password</h5>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="single-input-inner style-bg-border">
                            <input type="password" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Level</h5>
                    </div>
                    <div class="col-12">
                        <div class="single-input-inner style-bg-border radio-button">
                            <input type="text" placeholder="Experience" class="experience" />
                        </div>
                    </div>
                    <div class="col-12">
                        <h5>Description</h5>
                    </div>
                    <div class="col-12">
                        <div class="single-input-inner style-bg-border">
                            <textarea placeholder="Description" class="desc"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <button class="btn btn-base w-100">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
