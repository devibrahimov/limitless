<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.head')
    @yield('head')
    <title>@yield('title',config('app.name'))</title>
</head>
    <body data-new-gr-c-s-check-loaded="14.1075.0" data-gr-ext-installed="">
        <div class="body-overlay" id="body-overlay"></div>
            <div id="edumint">
                <div>
                    <div>
                        @include('frontend.includes.header')
                        @yield('content')
                        @include('frontend.includes.footer')
                        @include('layouts.frontend.scripts')
                        @yield('scripts')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
