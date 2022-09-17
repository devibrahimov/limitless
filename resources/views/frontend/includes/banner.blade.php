<div class="banner-area banner-area-1 bg-gray go-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 order-lg-12 align-self-center">
{{--                <div class="thumb b-animate-thumb"><img src="{{$slider->getFirstMediaUrl('slider_image','thumb-large') }}" alt="img" /></div>--}}
            </div>
            <div class="col-lg-7 order-lg-1 align-self-center">
                <div class="banner-inner text-center text-lg-left mt-5 mt-lg-0">
                    <h6 class="b-animate-1 sub-title">{{$slider->name ?? ''}}</h6>
                    <h1 class="b-animate-2 title">{{$slider->text ?? ''}}</h1>
                    <a class="btn btn-base b-animate-3 mr-sm-3 mr-2" href="#/contact">{{$slider->button1 ?? ''}}</a
                    ><a class="btn btn-border-black b-animate-3" href="#/blog-details">{{$slider->button2 ?? ''}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
