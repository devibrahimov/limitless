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
                        <div class="sidebar">
                            @include('frontend.pages.teacher.leftbar')
                        </div>
                    </div>
                    <div class="col-lg-9 align-self-center mt-5 mt-lg-0">
                        <h3 class="mb-5">Qazancım</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Tarix</th>
                                <th scope="col">Tələbə sayı</th>
                                <th scope="col">Qazanc</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">20.05.2020</td>
                                <td>4</td>
                                <td>120 AZN</td>
                            </tr>
                            <tr>
                                <td scope="row">21.05.2020</td>
                                <td>6</td>
                                <td>200 AZN</td>
                            </tr>
                            <tr>
                                <td scope="row">20.06.2020</td>
                                <td>5</td>
                                <td>150 AZN</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5 class="mb-5 text-right">Ümumi qazanc: 470 AZN</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
