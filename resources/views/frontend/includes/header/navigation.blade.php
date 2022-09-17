<section id="navigation">
    <div class="container">
        <div class="navigation_section">
            <div class="navigation_section-menu">
                <ul class="menu flex">
                    @forelse($menus as $menu)
                        @if(in_array('header',$menu->positions))
                            <li class="menu_item"><a href="{{ $menu->url }}" class="menu_item-link">{{ $menu->transname }}</a></li>
                        @endif
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="navigation_section-tuning">
                <a href="tel:+2777" class="tuning_number">
                    <img src="{{ asset('/frontend/img/number.png') }}" alt="2777">
                </a>
                @foreach($langs as $lang)
                    @if($lang->code == locale())
                        <div class="tuning_language">
                            <p class="language" id="myBtn">{{ $lang->name }}</p>
                            <img class="down-icon" src="{{ asset('/frontend/img/svg/down.svg') }}" alt="default_lang">
                        </div>
                        @break
                    @endif
                @endforeach
                <button class="tuning_credits" id="myBtn2">Kredit ödənişləri</button>
            </div>
        </div>
    </div>
</section>
<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="container">
            <span class="close">&times;</span>
            <div class="all-languages">
                @foreach($langs as $lang)
                    @if($lang->code == locale())
                        <a href="javascript:void(0)" class="current_language">
                            <img src="{{ asset('frontend/img/svg/').'/'.locale().'.svg' }}" alt="{{ $lang->name  }}">
                            {{ $lang->name }}
                        </a>
                        @break
                    @endif
                @endforeach

                <div class="other-languages">
                    <div class="languages-title">
                        <h3>{{__('frontend.home.select_lang')}}</h3>
                    </div>
                    <div class="languages-list">
                        @foreach($langs as $lang)
                            <a href="{{ route('frontend.lang.switch',$lang->code) }}"
                               class="{{ $locale == $lang->code ? 'active-language' : '' }}">{{ $lang->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Credit Modal -->
<div id="myModal2" class="modal2">
    <div class="modal-content2">
        <div class="all-credits_section container">
            <div class="all-credits_title">
                <h4>Kredit ödənişi</h4>
                <span class="close2">&times;</span>
            </div>
            <div class="all-credits">
                <a href="" class="credit-link" target="_blank">
                    <img src="{{ asset('/frontend/img/eManat 1.png') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
