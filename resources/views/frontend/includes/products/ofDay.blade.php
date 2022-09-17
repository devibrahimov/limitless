@if(!empty($productOfDay))
<div class="campaign-section_main-offer">
    <div class="offer-timeout">
        <div class="offer-head">
            <h6>{{ $productOfDay->transtitle ?? '' }}</h6>
        </div>
        <div class="offer-time">
            <div class="time">{{ $productOfDay->expiredDays }}</div>
            <span>:</span>
            <div class="time">{{ $productOfDay->expiredHours }}</div>
            <span>:</span>
            <div class="time">{{ $productOfDay->expiredMinutes }}</div>
            <span>:</span>
            <div class="time">{{ $productOfDay->expiredSeconds }}</div>
        </div>
    </div>
    <div class="offer">
        <div class="offer-name">
            <h5> {{  optional($productOfDay->product)->name }} </h5>
            @if(optional(optional($productOfDay->product)->brand)->getFirstMediaUrl('brand_image','thumb-medium') != '')
            <div class="offer-logo">
                <img src="{{ optional(optional($productOfDay->product)->brand)->getFirstMediaUrl('brand_image','thumb-medium') ?: '' }}" alt="{{ optional($productOfDay->product)->brand->name }}">
            </div>
            @endif
        </div>
        <div class="offer-info">
            <div class="offer-img">
                <a href="{{ $productOfDay->product->appurl }}">
                    <img src="{{ $productOfDay->product->getFirstMediaUrl('product_images') }}" alt="{{ $productOfDay->product->name }}">
                </a>
            </div>
            <div class="offer-badges">
                @if(count(optional($productOfDay->product)->badges))
                    @foreach(optional($productOfDay->product)->badges as $badge)
                        <div class="badge-item" style="color:{{ $badge->text_color }} ; background-color:{{ $badge->bg_color }}; border:1px solid transparent; border-color:{{ $badge->border_color }}">
                           <p>{{ $badge->transname }}</p>
                       </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="offer-price">
            <div class="prices">
                @if(!empty($productOfDay->product->discount_price))
                <h6 class="discount-price">{{ number_format($productOfDay->product->price) }} ₼</h6>
                @endif
                    <h5 class="price">{{ number_format($productOfDay->product->discount_price,2) }} ₼</h5>
            </div>
            <a href=" {{ $productOfDay->product->appurl }} " class="buy-offer text-white">
                {{__('frontend.details.read_more')}}

                <span class="px-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"> <path d="M12.172 7.00017L6.808 1.63617L8.222 0.222168L16 8.00017L8.222 15.7782L6.808 14.3642L12.172 9.00017H0V7.00017H12.172Z" fill="#FFF"></path> </svg>
                </span>
            </a>
        </div>
    </div>
</div>
@endif
