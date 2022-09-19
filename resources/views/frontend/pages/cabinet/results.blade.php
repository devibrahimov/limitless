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
