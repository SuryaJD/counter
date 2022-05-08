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
                <div class="tile tile-circle bg-primary"> {{ (($topPages->currentPage() - 1) * 5) + $loop->iteration }} </div>
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
</div>
