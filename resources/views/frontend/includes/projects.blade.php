@if (count($projects) > 0)
    <!-- events-section -->
    <section class="news-section sec-pad">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Projects</h1>
            </div>
            <div class="row">
                @forelse ($projects as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{route('frontend.projects.show',$item->id)}}"><img src="{{$item->getFirstMediaUrl('project_image','thumb-medium')}}"
                                            alt="" /></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="{{route('frontend.projects.show',$item->id)}}">{{$item->transtitle}}</a></h3>
                                    <div class="text">{{Str::limit($item->transcontent,40)}}</div>
                                    <div class="link-btn">
                                        <a href="{{route('frontend.projects.show',$item->id)}}"><i class="flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
          </div>
        </div>
    </section>
    <!-- events-section end -->
@endif
