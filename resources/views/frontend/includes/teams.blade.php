@if(count($teams) > 0)
<!-- team-section -->
<section class="team">
  <div class="container">
    <div class="team-title sec-title text-center">
      <h1>@lang('frontend.labels.teams')</h1>
    </div>
    <div class="row">
        @foreach($teams as $team)
          <div class="col-lg-3 col-md-6 col-sm-12 team-block">
            <div class="single-team-block wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
              <div class="inner-box">
                <div class="image-holder">
                  <figure class="image">
                    <a><img src="{{ $team->getFirstMediaUrl('team_image','thumb-medium') }}" alt="" /></a>
                  </figure>
                  <ul class="social-links clearfix">
                    <li>
                      <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
                <div class="lower-content">
                  <h4><a>{{ $team->name }}</a></h4>
                  <div class="designation">{{ $team->position }}</div>
                </div>
              </div>
            </div>
          </div>
      @endforeach

    </div>
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="show-more">
                  <a href="{{ route('frontend.teams') }}"><button id="moreInfoAbout"> @lang('frontend.labels.more_info')</button></a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- team end -->

<section class="hr-section">
  <hr />
</section>
@endif
