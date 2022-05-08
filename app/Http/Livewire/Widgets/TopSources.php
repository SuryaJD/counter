<?php

namespace App\Http\Livewire\Widgets;

use App\Models\Pageview;
use App\Traits\RangeTrait;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TopSources extends Component
{
    use RangeTrait;

    public Collection $referers;

    public $sources = [];

    public $mediums = [];

    public $campaign = [];

    public function mount()
    {
        $this->findRange();

        $this->referers = Pageview::select('referer',DB::raw('count(*) as views'))
                    ->whereBetween('created_at',[$this->from,$this->to])
                    ->groupBy('referer')
                    ->orderBy('views','desc')
                    ->take(5)
                    ->get();

        $this->sources = Pageview::select('utm->source as name',DB::raw('count(*) as views'))
                    ->whereBetween('created_at',[$this->from,$this->to])
                    ->groupBy(['name'])
                    ->orderBy('views','desc')
                    ->get();
        
        $this->mediums = Pageview::select('utm->medium as name',DB::raw('count(*) as views'))
                    ->whereBetween('created_at',[$this->from,$this->to])
                    ->groupBy(['name'])
                    ->orderBy('views','desc')
                    ->get();

        $this->campaign = Pageview::select('utm->medium as name',DB::raw('count(*) as views'))
                    ->whereBetween('created_at',[$this->from,$this->to])
                    ->groupBy(['name'])
                    ->orderBy('views','desc')
                    ->get();
        

    }

   


    public function render()
    {
        return view('livewire.widgets.top-sources');
    }
}
