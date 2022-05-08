<?php

namespace App\Http\Livewire\Widgets;

use App\Models\Pageview;
use App\Traits\RangeTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class TopPages extends Component
{
    use RangeTrait,WithPagination;

    public $path;

    protected $queryString = [
        'path' => ['except' => ''],
    ];

    public function filterbyPath(string $path)
    {
        $this->path = $path;
    }

    public function render()
    {
        $this->findRange();

        $query = Pageview::query();
        $query->select('page_url as name',DB::raw('count(*) as views'))
        ->whereBetween('created_at',[$this->from,$this->to])
        ->groupBy('page_url')
        ->orderBy('views','desc');

        if (isset($this->path)) {
           $query->where('page_url',$this->path);
        }

        return view('livewire.widgets.top-pages',[
            'topPages' =>$query->paginate(5)
        ]);
    }
}
