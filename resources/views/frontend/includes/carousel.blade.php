@if(count($sliders) > 0)
    <!-- main-slider -->
    <section class="main-slider">
      <div class="main-slider-carousel owl-carousel owl-theme">
          @foreach($sliders as $slider)
            <div class="slide" style="background-image: url({{ $slider->getFirstMediaUrl('slider_image','thumb-large') }})">
              <div class="overlay"></div>
              <div class="container">
                <div class="content-box">
                  <h1>{{ $slider->transname }}</h1>
                  <!-- <div class="btn-box"><a href="#" class="theme-btn style-one">Discover More</a></div> -->
                </div>
              </div>
            </div>
          @endforeach
      </div>
    </section>
    <!-- main-slider end -->
@endif
