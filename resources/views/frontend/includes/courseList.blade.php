<div class="row" >
    @foreach($courses as $course)
        <div class="col-md-6">
            <div class="single-course-inner">
                <div class="thumb">
                    <img src="{{$course->getFirstMediaUrl('course_image','thumb-large') }}" alt="img" />
                </div>
                <div class="details">
                    <div class="details-inner">
                        <div class="emt-user">
                            <span class="u-thumb"><img src="assets/img/author/1.png" alt="img" /></span>
                            <span class="align-self-center">{{$course->title}} {{$course->price}} </span>
                        </div>
                        <h6><a href="#">{{$course->content}}</a></h6>
                        <h6>{{$course->level->name}}</h6>
                        <h6>{{$course->category->name}}</h6>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
{!!$courses->links('vendor.pagination.limitless-paginate')  !!}
