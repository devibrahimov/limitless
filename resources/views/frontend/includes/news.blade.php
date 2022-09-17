@if(count($news) > 0)
<!-- news-section -->
<section class="news-section sec-pad">
  <div class="container">
    <div class="sec-title text-center">
      <h1>@lang('frontend.labels.news')</h1>
    </div>

    <div class="row">
        @foreach($news as $item)
          <div class="col-lg-6 col-md-6 col-sm-12 news-block">
            <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-holder">
                  <figure class="image">
                    <a href="{{ $item->transslug }}"><img src="{{ $item->getFirstMediaUrl('news_image','thumb-medium') }}" alt="" /></a>
                  </figure>
                </div>
                <div class="lower-content">
                  <h2><a href="{{ $item->transslug }}">{{ $item->transtitle }}</a></h2>
                  <p><i class="fas fa-calendar-alt"></i> {!! date('d M Y', strtotime($item->created_at)) !!}</p>
                  <p>
                      {{Str::limit($item->transcontent, 20) }}
                  </p>
                  <div class="link-btn">
                    <a href="{{ $item->transslug }}"><i class="flaticon-right-arrow"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="show-more">
                  <a href="{{ route('frontend.news') }}"><button id="moreInfoAbout"> @lang('frontend.labels.more_info')</button></a>
              </div>
          </div>
      </div>
</section>
<!-- news-section end -->
@endif
