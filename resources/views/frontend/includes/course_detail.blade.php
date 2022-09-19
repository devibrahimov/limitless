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
    <div class="course-single-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-course-detaila-inner">
                        <div class="details-inner">
                            <h3 class="title"><a href="#">{{$course->title}}</a></h3>
                        </div>
                        <div class="thumb">
                            <img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" />
                        </div>
                        <div class="course-details-nav-tab text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true"
                                    >Description</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"
                                    >Curriculum</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Quiz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Review</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <div class="course-details-content">
                                    <p>
                                      {{$course->content}}
                                    </p>
                                    <div class="row pt-4">
                                        <div class="col-sm-6">
                                            <ul class="single-list-wrap">
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Metus interdum metus</li>
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Ligula cur maecenas</li>
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Fringilla nulla</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 mt-3 mt-sm-0">
                                            <ul class="single-list-wrap">
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Metus interdum metus</li>
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Ligula cur maecenas</li>
                                                <li class="single-list-inner style-check-box"><i class="fa fa-check"></i> Fringilla nulla</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="course-details-content">
                                    <h4 class="title">Overview</h4>
                                    <p>
                                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog,
                                        flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab
                                    </p>
                                    <div id="accordion" class="accordion-area mt-4">
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-one">
                                                <h5 class="mb-0">
                                                    <button class="btn-link" data-toggle="collapse" data-target="#f-one" aria-expanded="true" aria-controls="f-one">
                                                        01. What does you simply dummy in do ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-one" class="show collapse" aria-labelledby="ff-one" data-parent="#accordion">
                                                <div class="card-body">
                                                    What does you dummy text of free available in market printing has industry been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-two">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-toggle="collapse" data-target="#f-two" aria-expanded="true" aria-controls="f-two">
                                                        02. What graphics dummy of free design ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-two" class="collapse" aria-labelledby="ff-two" data-parent="#accordion">
                                                <div class="card-body">
                                                    What graphics simply dummy text of free available in market printing industry has been industry's standard dummy text
                                                    ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-three">
                                                <h5 class="mb-0">
                                                    <button
                                                            class="btn-link collapsed"
                                                            data-toggle="collapse"
                                                            data-target="#f-three"
                                                            aria-expanded="true"
                                                            aria-controls="f-three"
                                                    >
                                                        03. Why we are the best ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-three" class="collapse" aria-labelledby="ff-three" data-parent="#accordion">
                                                <div class="card-body">
                                                    Why we are dummy text of free available in market printing industry has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card single-faq-inner style-no-border">
                                            <div class="card-header" id="ff-four">
                                                <h5 class="mb-0">
                                                    <button
                                                            class="btn-link collapsed"
                                                            data-toggle="collapse"
                                                            data-target="#f-four"
                                                            aria-expanded="true"
                                                            aria-controls="f-four"
                                                    >
                                                        04. What industries dummy covered ?
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="f-four" class="collapse" aria-labelledby="ff-four" data-parent="#accordion">
                                                <div class="card-body">
                                                    What industries text of free available in market printing industry has been industry's standard dummy text ever.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="course-details-content">
                                    <h4 class="title">Test</h4>
                                    <div class="quiz-container" id="quiz">
                                        <div class="quiz-header">
                                            <h4 id="question">Question text</h4>
                                            <ul>
                                                <li>
                                                    <input type="radio" name="answer" id="a" class="answer" />
                                                    <label for="a" id="a-text">Answer</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="answer" id="b" class="answer" />
                                                    <label for="b" id="b-text">Answer</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="answer" id="c" class="answer" />
                                                    <label for="c" id="c-text">Answer</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="answer" id="d" class="answer" />
                                                    <label for="d" id="d-text">Answer</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="submit" id="submitButton"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                <div class="ratings-list-inner mb-4">
                                    <div class="row">
                                        <div class="col-md-4 align-self-center text-center">
                                            <div class="total-avarage-rating">
                                                <h2>5.0</h2>
                                                <div class="rating-inner">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <p>Rated 5 out of 3 Ratings</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>5</span>
                                                        <span class="progress-bar-inner">
                                <span class="progress">
                                  <span
                                          class="progress-bar"
                                          role="progressbar"
                                          aria-valuenow="100"
                                          aria-valuemin="0"
                                          aria-valuemax="100"
                                          style="width: 100%"
                                  ></span>
                                </span>
                              </span>
                                                        <span class="counter-count">100%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>4</span>
                                                        <span class="progress-bar-inner">
                                <span class="progress">
                                  <span
                                          class="progress-bar"
                                          role="progressbar"
                                          aria-valuenow="80"
                                          aria-valuemin="0"
                                          aria-valuemax="100"
                                          style="width: 0%"
                                  ></span>
                                </span>
                              </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>3</span>
                                                        <span class="progress-bar-inner">
                                <span class="progress">
                                  <span
                                          class="progress-bar"
                                          role="progressbar"
                                          aria-valuenow="0"
                                          aria-valuemin="0"
                                          aria-valuemax="100"
                                          style="width: 0%"
                                  ></span>
                                </span>
                              </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>2</span>
                                                        <span class="progress-bar-inner">
                                <span class="progress">
                                  <span
                                          class="progress-bar"
                                          role="progressbar"
                                          aria-valuenow="0"
                                          aria-valuemin="0"
                                          aria-valuemax="100"
                                          style="width: 0%"
                                  ></span>
                                </span>
                              </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="counter-label"><i class="fa fa-star"></i>1</span>
                                                        <span class="progress-bar-inner">
                                <span class="progress">
                                  <span
                                          class="progress-bar"
                                          role="progressbar"
                                          aria-valuenow="0"
                                          aria-valuemin="0"
                                          aria-valuemax="100"
                                          style="width: 0%"
                                  ></span>
                                </span>
                              </span>
                                                        <span class="counter-count">0%</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="td-sidebar">
                        <div class="widget widget_feature">
                            <h4 class="widget-title">Course Features</h4>
                            <ul>
                                <li><i class="fa fa-user"></i><span>Enrolled :</span> 1200 students</li>
                                <li><i class="fa fa-clock-o"></i><span>Duration :</span> {{$course->duraction}}</li>
                                <li><i class="fa fa-clipboard"></i><span>Lectures :</span>{{$course->lectures}}</li>
                                <li><i class="fa fa-clone"></i><span>Categories:</span> {{$course->category->name}}</li>
{{--                                <li><i class="fa fa-tags"></i><span>Tags:</span> Android, JavaScript</li>--}}
                                <li><i class="fa fa-clipboard"></i><span>Instructor:</span> {{$course->teacher->first_name}}</li>
                            </ul>
                            <div class="price-wrap text-center">
                                <h5>Price:<span>${{$course->price}}</span></h5>
                                <a class="btn btn-base btn-radius" href="#">ENROLL COURSE</a>
                            </div>
                        </div>
                        <div class="widget widget_catagory">
                            <h4 class="widget-title">Trending Course</h4>
                            <div class="single-course-inner">
                                <div class="thumb">
                                    <img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" />
                                </div>
                                <div class="details">
                                    <div class="details-inner">
                                        <div class="emt-user">
                                            <span class="u-thumb"><img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" /></span>
                                            <span class="align-self-center">{{$course->title }}</span>
                                        </div>
                                        <h6><a href="course-details.html">Fox nymphs grab quick-jived waltz. Brick quiz whangs</a></h6>
                                    </div>
                                    <div class="emt-course-meta">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i> 4.3
                                                    <span>(23)</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="price text-right">Price: <span>${{$course->price}}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
