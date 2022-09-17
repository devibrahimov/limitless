{{--<div class="mobile-bar">--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 13" fill="none">--}}
{{--        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.431885 1.36363C0.431885 0.949419 0.767671 0.613632 1.18188 0.613632H15.1819C15.5961 0.613632 15.9319 0.949419 15.9319 1.36363C15.9319 1.77785 15.5961 2.11363 15.1819 2.11363H1.18188C0.767671 2.11363 0.431885 1.77785 0.431885 1.36363ZM0.431885 6.36363C0.431885 5.94942 0.767671 5.61363 1.18188 5.61363H15.1819C15.5961 5.61363 15.9319 5.94942 15.9319 6.36363C15.9319 6.77785 15.5961 7.11363 15.1819 7.11363H1.18188C0.767671 7.11363 0.431885 6.77785 0.431885 6.36363ZM1.18188 10.6136C0.767671 10.6136 0.431885 10.9494 0.431885 11.3636C0.431885 11.7778 0.767671 12.1136 1.18188 12.1136H15.1819C15.5961 12.1136 15.9319 11.7778 15.9319 11.3636C15.9319 10.9494 15.5961 10.6136 15.1819 10.6136H1.18188Z" fill="black"/>--}}
{{--    </svg>--}}
{{--    <ul class="mobile-menu">--}}
{{--        <li class="login">--}}
{{--            <a href=""><img src="{{ asset('/frontend/img/svg/login.svg') }}" alt="">Hello, Sign in</a>--}}
{{--            <img class="close-menu" src="{{ asset('/frontend/img/svg/cancel.svg') }}" alt="">--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <ul class="category-block">--}}
{{--                <li class="mobile-category">--}}
{{--                    <p>--}}
{{--                        {{ __('backend.titles.menus') }}--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                @forelse($menus as $menu)--}}
{{--                    @if(in_array('header',$menu->positions))--}}
{{--                        <li class="mobile-category_item">--}}
{{--                            <p>--}}
{{--                                <a class="text-muted" href="{{ $menu->url }}">{{ $menu->transname }}</a>--}}
{{--                            </p>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @empty--}}
{{--                @endforelse--}}

{{--            </ul>--}}
{{--        </li>--}}
{{--        <ul class="category-block">--}}
{{--            <li class="mobile-category"><p>Shop by category</p></li>--}}
{{--            <li class="mobile-category_item">--}}
{{--                <p>Women <img src="{{ asset('/frontend/img/svg/angle-right.svg') }}" alt=""></p>--}}
{{--                <ul class="mobile-subcategories">--}}
{{--                    <li class="sub-item"><a href="">1</a></li>--}}
{{--                    <li class="sub-item"><a href="">2</a></li>--}}
{{--                    <li class="sub-item"><a href="">3</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="mobile-category_item">--}}
{{--                <p>Man <img src="{{ asset('/frontend/img/svg/angle-right.svg') }}" alt=""></p>--}}
{{--                <ul class="mobile-subcategories">--}}
{{--                    <li class="sub-item"><a href="">1</a></li>--}}
{{--                    <li class="sub-item"><a href="">2</a></li>--}}
{{--                    <li class="sub-item"><a href="">3</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="mobile-category_item">--}}
{{--                <p>Kids <img src="{{ asset('/frontend/img/svg/angle-right.svg') }}" alt=""></p>--}}
{{--                <ul class="mobile-subcategories">--}}
{{--                    <li class="sub-item"><a href="">1</a></li>--}}
{{--                    <li class="sub-item"><a href="">2</a></li>--}}
{{--                    <li class="sub-item"><a href="">3</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="mobile-category_item">--}}
{{--                <p>Teens <img src="{{ asset('/frontend/img/svg/angle-right.svg') }}" alt=""></p>--}}
{{--                <ul class="mobile-subcategories">--}}
{{--                    <li class="sub-item"><a href="">1</a></li>--}}
{{--                    <li class="sub-item"><a href="">2</a></li>--}}
{{--                    <li class="sub-item"><a href="">3</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <li class="select-language">--}}
{{--            @foreach($langs as $lang)--}}
{{--                @if($lang->code == locale())--}}
{{--                    <p class="mobile-language">--}}
{{--                        <img src="{{ asset('frontend/img/svg/').'/'.locale().'.svg' }}" alt="{{ $lang->name  }}">--}}
{{--                        {{ $lang->name }}--}}
{{--                    </p>--}}
{{--                    @break--}}
{{--                @endif--}}
{{--            @endforeach--}}

{{--            <div class="mobile-languages">--}}
{{--                @foreach ($langs as $lang)--}}
{{--                    <a href="{{ $lang->code }}">{{ $lang->name }}</a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
