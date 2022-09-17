<div class="card-body col-md-10 offset-md-1 text-center mt-2">
<div class="table-responsive">
    <table class="table table-hover table-rounded border gy-7 gs-7">
            <tbody>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.id')</td>
                <td class="table-center">{{ $portfolio->id }}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.category')</td>
                <td class="table-center">{{ $portfolio->category->transname ?? '' }}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.name')</td>
                <td class="table-center">{{ $portfolio->transname ?? '' }}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.slug')</td>
                <td class="table-center">{{ $portfolio->transslug ?? '' }}</td>
            </tr>

            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">
                    @lang('backend.labels.content')
                </td>
                <td class="table-center">{!! strip_tags($portfolio->transdescription) !!}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.page_count')</td>
                <td class="table-center">{{ $portfolio->page_count ?? '' }}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.day_count')</td>
                <td class="table-center">{{ $portfolio->page_count ?? '' }}</td>
            </tr>
            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">@lang('backend.labels.status')</td>
                <td class="table-center">{!! badge($portfolio->status) !!}</td>
            </tr>

            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">
                    @lang('backend.labels.created_at')
                </td>
                <td class="table-center">{{ $portfolio->created_at->format('d-m-Y H:i:s') }}</td>
            </tr>

            <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                <td class="table-row-title w-25">
                    @lang('backend.labels.updated_at')
                </td>
                <td class="table-center">{{ $portfolio->updated_at->format('d-m-Y H:i:s') }}</td>
            </tr>
            </tbody>
        </table>
    <h1 class="mt-2 text-center">SEO</h1>
    <table class="table table-hover table-rounded border gy-7 gs-7">
        <tbody>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
            <td class="table-row-title w-25">
                @lang('backend.labels.title')
            </td>
            <td class="table-center">{{ $portfolio->transtitle ?? ''  }}</td>
        </tr>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
            <td class="table-row-title w-25">
                @lang('backend.labels.keywords')
            </td>
            <td class="table-center">{{ $portfolio->transkeywords ?? ''  }}</td>
        </tr>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
            <td class="table-row-title w-25">
                @lang('backend.labels.description')
            </td>
            <td class="table-center">{{ $portfolio->transdescription ?? ''  }}</td>
        </tr>
        </tbody>
    </table>
    </div>

    @include('backend.includes.media',[
                'model' => $portfolio,
                'name'  => 'portfolios',
                'media_collection_name'  => 'portfolio_images',
                'isDeleted' => false,
                'isCovered' => false,
                ])
</div>
