@if(count($goals) > 0)
<!-- research-fields -->
<section class="research-fields sec-pad">
  <div class="goals">
    <div class="container">
      <div class="sec-title text-center">
        <h1>@lang('frontend.labels.our_goals')</h1>
      </div>
      <div class="row">
        @foreach($goals as $goal)
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
              <div class="our-goals">
                <img src="{{ $goal->getFirstMediaUrl('goal_image','thumb-medium') }}" alt="" />
              </div>
            </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="show-more">
              <a href="{{ route('frontend.goals') }}"><button id="moreInfoAbout"> @lang('frontend.labels.more_info')</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- research-fields end -->

<section class="hr-section">
  <hr />
</section>
@endif
