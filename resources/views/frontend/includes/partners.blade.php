@if (count($partners) > 0)
    <!-- events-section -->
    <section class="news-section sec-pad">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Partners</h1>
            </div>
            <div class="row">
              @forelse ($partners as $item)
                  <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 partner-area">
                      <div class="container">
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                  <div class="partner-logo">
                                      <img src="{{$item->getFirstMediaUrl('partner_image','thumb-small')}}" alt="" />
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                  <div class="partner-title">
                                      <h5 class="card-title">{{$item->transtitle}}</h5>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                  <div class="partner-about">
                                      <p class="card-text">{{$item->transcontent}}</p>
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
