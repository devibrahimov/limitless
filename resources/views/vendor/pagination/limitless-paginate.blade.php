{{--<nav class="td-page-navigation">--}}
{{--    <ul class="pagination">--}}
{{--        <li class="pagination-arrow">--}}
{{--            <a href="#"><i class="fa fa-angle-double-left"></i></a>--}}
{{--        </li>--}}
{{--        <li><a href="#">1</a></li>--}}
{{--        <li><a class="active" href="#">2</a></li>--}}
{{--        <li><a href="#">...</a></li>--}}
{{--        <li><a href="#">3</a></li>--}}
{{--        <li class="pagination-arrow">--}}
{{--            <a href="#"><i class="fa fa-angle-double-right"></i></a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}

@if ($paginator->hasPages())
    <nav class="td-page-navigation">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination-arrow disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination-arrow active" aria-current="page"><a  class="nav-link active" >{{ $page }}</a></li>
                        @else
                            <li class="pagination-arrow" ><a  class="pagination-arrow" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
