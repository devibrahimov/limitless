<div class="about-area pd-top-140">
    <div class="container">
        <div class="about-area-inner">
            <div class="row mb-5 justify-content-center text-center items">
                <div class="col-12 col-md-12 align-self-center text-center text-md-left">
                    <div
                            class="row items filter-items-1 shuffle"
                            style="position: relative; overflow: hidden; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s"
                    >
                        <div
                                class="col-12 col-md-6 col-lg-4 item filter-item-1 shuffle-item shuffle-item--visible"
                                style="position: relative; height: 100%"
                        >
                            <div class="row p-0 text-center">
                                <iframe width="420" height="315"
                                        src="{{$video->link1 ?? '#'}}">
                                </iframe>
                            </div>
                            <div class="play-icon">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div
                                class="col-12 col-md-6 col-lg-4 item filter-item-1 shuffle-item shuffle-item--visible"
                                style="position: relative; height: 100%"
                        >
                            <div class="row p-0 text-center">
                                <iframe width="420" height="315"
                                        src="{{$video->link2 ?? '#'}}">
                                </iframe>
                            </div>
                            <div class="play-icon">
                                <i class="far fa-play-circle"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item-1 shuffle-item shuffle-item--visible" style="position: relative">
                            <div class="chose-wrapper pl-25 pl-lg-0 pl-md-0 pl-xs-0">
                                <div
                                        class="section-title mb-30 wow fadeInUp2 animated"
                                        data-wow-delay=".1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2"
                                >
                                    <h5 class="bottom-line mb-25">{{$video->title1 ?? ''}}</h5>
                                    <h2 class="mb-25">{{$video->title1 ?? ''}}?</h2>
                                    <p>
                                        {{$video->content ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
