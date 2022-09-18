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
                    <h2 class="page-title">Courses</h2>
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Courses</li>
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
                <div class="col-lg-8 order-lg-12" id="list">
                   @include('frontend.includes.courseList')
                </div>
                <div class="col-lg-4 order-lg-1 col-12">
                    <div class="td-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Catagory</h4>
                            <ul class="catagory-items">

                              @foreach($categories as $category)
                                    <li>
                                    <label class="single-checkbox">

                                        <input type="radio" name="category" class="category" value="{{$category->id}}"/>
                                        <span class="checkmark"></span>
                                        {{$category->name}}
                                    </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget_checkbox_list">
                            <h4 class="widget-title">Level</h4>
                            @foreach($levels as $level)
                                <label class="single-checkbox">
                                    <input type="radio" name="level" class="level" value="{{$level->id}}" />
                                    <span class="checkmark"></span>
                                    {{$level->name}}
                                </label>
                             @endforeach
                        </div>
                        <div class="widget widget_range">
                            <h4 class="widget-title">Price</h4>
                            <span class="multi-range">
                              <input type="range" min="0" max="1000" value="250" id="lower" />
                              <input type="range" min="0" max="1000" value="750" id="upper" />
                            </span>



                        </div>

                    </div>
                    <br>
                    <button class="btn btn-info btn-block td-sidebar mt-5 " id="filter"> Axtar </button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
     <script>

    $('#filter').on('click',function(){
        category = $('input[name=category]:checked').val();
        Courselevel = $('input[name=level]:checked').val();
        lower = $('#lower').val();
        upper = $('#upper').val();



         $.ajax({
             type: 'GET',
             url :'{{route('frontend.CoursefilterQuery')}}',
             data: {
                 'category' :category,
                 'level' :Courselevel,
                 'lower' :lower,
                 'upper' :upper,
                 '_token' : '{{csrf_token()}}'
             } ,
             'success':function(data){
                 $('#list').html(' ')
                 $('#list').append(data)
             }
         })
    })
    </script>
@endsection
