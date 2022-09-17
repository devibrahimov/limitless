<div class="card-body col-md-10 offset-md-1 text-center mt-2">
<div class="table-responsive">
    <table class="table table-hover table-rounded border gy-7 gs-7">
            <tbody>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <td class="table-row-title w-25">@lang('backend.labels.id')</td>
                    <td class="table-center">{{ $about_block->id }}</td>
                </tr>
{{--                    <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">--}}
{{--                        <td class="table-row-title w-25">@lang('backend.labels.name')</td>--}}
{{--                        <td class="table-center">{{ $about_block->name }}</td>--}}
{{--                    </tr>--}}

                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <td class="table-row-title w-25">Link</td>
                    <td class="table-center">{{ $about_block->link }}</td>
                </tr>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <td class="table-row-title w-25">@lang('backend.labels.status')</td>
                    <td class="table-center">{!! badge($about_block->status) !!}</td>
                </tr>

{{--                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">--}}
{{--                    <td class="table-row-title w-25">--}}
{{--                        @lang('backend.labels.content')--}}
{{--                    </td>--}}
{{--                    <td class="table-center">{!! strip_tags($about_block->transtext) !!}</td>--}}
{{--                </tr>--}}

                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <td class="table-row-title w-25">
                        @lang('backend.labels.created_at')
                    </td>
                    <td class="table-center">{{ $about_block->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>

                <tr class="fw-bold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                    <td class="table-row-title w-25">
                        @lang('backend.labels.updated_at')
                    </td>
                    <td class="table-center">{{ $about_block->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>

            </tbody>
        </table>
    </div>
    @include('backend.includes.media',[
                        'model' => $about_block,
                        'name'  => 'about_block',
                        'isDeleted' => false,
                        'isCovered' => false,
                    ])
</div>
