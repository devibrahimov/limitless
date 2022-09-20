<div class="row" >
    @foreach($courses as $course)
        <div class="col-md-6">
            <div class="single-course-inner">
                <div class="thumb">
{{--                    <img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" />--}}
                    <img src="https://solverwp.com/demo/react/edumint/assets/img/banner/1.png" alt="img" />
                </div>
                <div class="details">
                    <a href="{{route('frontend.courses.detail',$course->id)}}">    <div class="details-inner">
                        <div class="emt-user">
                            <span class="u-thumb"><img src="assets/img/author/1.png" alt="img" /></span>
                            <span class="align-self-center">{{$course->user->first_name}} {{$course->user->last_name}} {{$course->price}} </span>
                        </div>
{{--                        <h6><a href="#">{{$course->content}}</a></h6>--}}
                        <h6>{{$course->level->name}}</h6>
                        <h6>{{$course->category->name}}</h6>
                        </div></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{!!$courses->links('vendor.pagination.limitless-paginate')  !!}
