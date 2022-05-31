{{--

<div class="card card-fluid">
    <div class="card-header d-flex justify-content-between">
            <div>
                {{ __('Top Pages') }}
</div>
{{ $topPages->links('vendor.livewire.simple-bootstrap') }}
</div>
<div class="list-group list-group-flush">
    @foreach ($topPages as $page)
    <a class="list-group-item list-group-item-action" style="cursor: pointer;"
        wire:click="filterbyPath('{{Spatie\Url\Url::fromString($page->name)->getPath()}}')">
        <div class="list-group-item-figure" wire:loading.remove>
            <div class="tile tile-circle bg-primary"> {{ (($topPages->currentPage() - 1) * 5) + $loop->iteration }}
            </div>
        </div>
        <div class="list-group-item-figure" wire:loading>
            <div class="spinner-grow text-primary" style="width: 1.8rem; height: 1.8rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="list-group-item-body">
            <span class="text-mute">
                {{Spatie\Url\Url::fromString($page->name)->getPath()}}
            </span>
            <div class="float-right">
                {{ $page->views }}
            </div>
            <div class="progress progress-sm bg-transparent">
                <div class="progress-bar" role="progressbar"
                    style="width: {{ $page->views/8000 * 100}}%; background-color:#008FFB;"
                    aria-valuenow="{{ $page->views }}">
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
</div> --}}
<div class="card card-xxl-stretch">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5 pb-3">
        <!--begin::Card title-->
        <h3 class="card-title fw-bolder text-gray-800 fs-2">{{ __('Top Pages')}}</h3>
        <!--end::Card title-->
        <div class="card-toolbar">
            <div class="my-1">
                {{ $topPages->links('vendor.livewire.simple-bootstrap') }}
            </div>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-0">
        <!--begin::Table-->
        <div class="table-responsive">
            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                <!--begin::Table body-->
                <tbody>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                        <th class="min-w-200px px-0">{{ __('Pages') }}</th>
                        <th class="min-w-125px">{{__('Views')}}</th>
                    </tr>
                    <!--end::Table row-->
                    <!--begin::Table row-->
                    {{-- @foreach ($topPages as $page)
                    <a class="list-group-item list-group-item-action" style="cursor: pointer;"
                        wire:click="filterbyPath('{{Spatie\Url\Url::fromString($page->name)->getPath()}}')">
                        <div class="list-group-item-figure" wire:loading.remove>
                            <div class="tile tile-circle bg-primary"> {{ (($topPages->currentPage() - 1) * 5) + $loop->iteration }}
                            </div>
                        </div>
                        <div class="list-group-item-figure" wire:loading>
                            <div class="spinner-grow text-primary" style="width: 1.8rem; height: 1.8rem;" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="list-group-item-body">
                            <span class="text-mute">
                                {{Spatie\Url\Url::fromString($page->name)->getPath()}}
                            </span>
                            <div class="float-right">
                                {{ $page->views }}
                            </div>
                            <div class="progress progress-sm bg-transparent">
                                <div class="progress-bar" role="progressbar"
                                    style="width: {{ $page->views/8000 * 100}}%; background-color:#008FFB;"
                                    aria-valuenow="{{ $page->views }}">
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach --}}
                    @foreach ($topPages as $page)
                    <tr>
                        <!--begin::Author=-->
                        <td class="p-0">
                            <div class="d-flex align-items-center">
                                <!--begin::Logo-->
                                <div class="symbol symbol-45px me-2" >
                                    <span class="symbol-label">
                                        <div class="symbol-label fs-2 fw-bold text-primary">{{ (($topPages->currentPage() - 1) * 5) + $loop->iteration }} </div>
                                    </span>
                                </div>
                                <!--end::Logo-->
                                <div class="ps-3">
                                    <a wire:click="filterbyPath('{{Spatie\Url\Url::fromString($page->name)->getPath()}}')"
                                        class="text-gray-800 fw-bold d-block text-hover-primary mb-1">{{Spatie\Url\Url::fromString($page->name)->getPath()}}</a>
                                </div>
                            </div>
                        </td>
                        <!--end::Author=-->
                        <!--begin::Progress=-->
                        <td>
                            <div class="d-flex flex-column w-100 me-2 mt-2">
                                <span class="text-gray-400 me-2 fw-boldest mb-2">{{ $page->views }}</span>
                                <div class="progress bg-light-danger w-100 h-5px">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                                </div>
                            </div>
                        </td>
                        <!--end::Company=-->
                    </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Body-->
</div>
