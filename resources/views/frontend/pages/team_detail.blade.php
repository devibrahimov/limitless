@extends('layouts.frontend.master')
@section('title')
    {{ !empty($menu['menu']) ? $menu['transtitle'] : '' }}
@endsection
@section('keyword')
    {{ !empty($menu['keyword']) ? $menu['transkeyword'] : '' }}
@endsection
@section('description')
    {{ !empty($menu['description']) ? $menu['transdescription'] : '' }}
@endsection
@section('head')
@endsection
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg)">
        <div class="overlay"></div>
        <div id="particles-js" class="particles-pattern"><canvas class="particles-js-canvas-el"></canvas></div>
        <div class="container">
          <div class="content-box">
            <h1>Teams</h1>
            <ul class="bread-crumb clearfix">
              <li><a href="/">Home</a></li>
              <li>Team Details</li>
            </ul>
          </div>
        </div>
      </section>
      <!--End Page Title-->
  
      <!-- team-details -->
      <section class="professor-details-page">
        <div class="team-details">
          <div class="container">
            <div class="inner-box">
              <div class="image-box">
                <figure class="image"><img src="{{$item->getFirstMediaUrl('team_image','thumb-medium')}}" alt="" /></figure>
              </div>
              <div class="content-box">
                <div class="info">
                  <h2 class="name">{{$item->name}}</h2>
                  <span class="designation">{{$item->position}}</span>
                </div>
                <div class="text">{{$item->transcontent}}</div>
                <ul class="social-links clearfix">
                  <li>
                    <a target="_blank" href="{{$item->linkedin}}"><i class="fab fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
@section('scripts')
    <script></script>
@endsection
