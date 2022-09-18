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
                            <div class="thumb position-relative">
                                <label for="image">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=687&amp;q=80" alt="img">
                                    <div class="overlay"><i class="fa-regular fa-pen-to-square"></i></div>
                                    <input type="file" id="image">
                                </label>
                                <h4 style="text-align: center; margin-top: 30px">Jane Mileston</h4>
                            </div>
                            <div>
                                @include('frontend.pages.cabinet.leftbar')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h3 class="mb-5">Nəticələrim</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Tarix</th>
                                <th scope="col">Fənn</th>
                                <th scope="col">Müəllim</th>
                                <th scope="col">Nəticə</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">20.05.2020</td>
                                <td>Ana dili</td>
                                <td>Rəna Salmanova</td>
                                <td>55 bal</td>
                            </tr>
                            <tr>
                                <td scope="row">21.05.2020</td>
                                <td>Rus dili</td>
                                <td>Sadiq Mənəfov</td>
                                <td>60 bal</td>
                            </tr>
                            <tr>
                                <td scope="row">20.06.2020</td>
                                <td>İngilis dili</td>
                                <td>Tofiq Muradov</td>
                                <td>43 bal</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script></script>
@endsection
