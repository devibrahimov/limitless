<div class="card-body">
    <div class="table-responsive">
        <table class="table table-light table-light-success">
            <tbody>
                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.id')</td>
                    <td class="table-center">{{ $vacancy->id }}</td>
                </tr>
                    <tr class="bg-gray-100">
                        <td class="table-row-title w-25">@lang('backend.labels.name')</td>
                        <td class="table-center">{{ $vacancy->transname }}</td>
                    </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.slug')</td>
                    <td class="table-center">{{ $vacancy->transslug }}</td>
                </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.page_title')</td>
                    <td class="table-center">{{ $vacancy->transPageTitle }}</td>
                </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.meta_title')</td>
                    <td class="table-center">{{ $vacancy->transtitle }}</td>
                </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.meta_description')</td>
                    <td class="table-center">{{ $vacancy->transdescription }}</td>
                </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.meta_keywords')</td>
                    <td class="table-center">{{ $vacancy->transkeywords }}</td>
                </tr>

                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.content')</td>
                    <td class="table-center">{!! Str::limit($vacancy->text,100) !!}</td>
                </tr>


                <tr class="bg-gray-100">
                    <td class="table-row-title w-25">@lang('backend.labels.status')</td>
                    <td class="table-center">{!! badge($vacancy->status) !!}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
