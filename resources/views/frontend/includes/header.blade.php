<div class="navbar-area">
  <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg">
    <div class="container nav-container">
      <div class="responsive-mobile-menu">
        <button
                class="menu toggle-btn d-block d-lg-none"
                data-target="#edumint_main_menu"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
          <span class="icon-left"></span><span class="icon-right"></span>
        </button>
      </div>
      <div class="logo">
        <a href="/"><img src="{{asset('frontend/images/limitlesswhite.png')}}" alt="img" /></a>
      </div>
      <div class="nav-right-part nav-right-part-mobile">
        <a class="signin-btn" href="signin.html">Sign In</a><a class="btn btn-base" href="blog.html">Sign Up</a
        ><a class="search-bar" href="#"><i class="fa fa-search"></i></a>
      </div>
      <div class="collapse navbar-collapse go-top" id="edumint_main_menu">
        <ul class="navbar-nav menu-open">
{{--          @foreach($menus as $menu)--}}
{{--                      <li class="current-menu-item">--}}
{{--                        <a href="{{$menu->slug}}">{{$menu->name}}</a>--}}
{{--                      </li>--}}
{{--          @endforeach--}}
          <li class="current-menu-item">
            <a href="/">Home</a>
          </li>
          <li>
            <a href="{{route('frontend.news')}}">News</a>
          </li>
          <li>
            <a href="{{route('frontend.course.index')}}">Course</a>
          </li>
          <li>
            <a href="{{route('frontend.translation')}}">Translation</a>
          </li>
          <li><a href="{{route('frontend.contact')}}">Contact Us</a></li>
        </ul>
      </div>


        @auth()


            @if(auth()->user()->type == 0)
      <div class="nav-right-part nav-right-part-desktop position-relative">
        <button class="profile">
          <span>{{auth('web')->user()->first_name}}</span>
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                  alt="Profile"   />
        </button>
        <ul class="dropdown">
          <li><a href="{{route('frontend.cabinet_profil')}}"> Profil </a></li>
          <li><a href="{{route('frontend.cabinet_courses')}}">Kurslar</a></li>
          <li><a href="{{route('frontend.cabinet_results')}}">Nəticələrim</a></li>
          <li><a href="#">Çıxış</a></li>
        </ul>
      </div>
       @endif
        @if(auth()->user()->type == 1)


      <div class="nav-right-part nav-right-part-desktop position-relative">
        <button class="profile">
          <span>teacher: {{auth()->user()->first_name}}</span>
          <img src="https://t3.ftcdn.net/jpg/02/65/18/30/360_F_265183061_NkulfPZgRxbNg3rvYSNGGwi0iD7qbmOp.jpg"
                  alt="Profile"   />
        </button>
        <ul class="dropdown">
          <li><a href="{{route('frontend.teacher_profil')}}"> Profil </a></li>
          <li><a href="{{route('frontend.teacher_courses')}}">Satılan Kurslar</a></li>
          <li><a href="{{route('frontend.teacher_earning')}}">Qazancım</a></li>
          <li><a href="#">Çıxış</a></li>
        </ul>
      </div>
       @endif

        @else
            <div class="nav-right-part nav-right-part-desktop">
                <a class="signin-btn" href="{{route('frontend.signin')}}">Sign In</a>
                <a class="btn btn-base" href="{{route('frontend.signup')}}">Register</a>
            </div>
      @endauth
    </div>
  </nav>
</div>
