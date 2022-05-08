<?php

namespace App\Http\Livewire\Widgets;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\Pageview;
use App\Traits\GroupTrait;
use App\Traits\RangeTrait;
use Carbon\CarbonPeriod;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class Main extends Component
{

    private $pageviews;

    private $unique;

    private $range;

    private $from;

    private $to;

    private $format;

    private $interval;

    protected $listeners = ['refresh' => 'refresh'];

    public function mount($range,$from,$to,$format,$interval)
    {

        $this->range    = $range;
        $this->from     = $from;
        $this->to       = $to;
        $this->format   = $format;
        $this->interval = $interval;


        $this->queryData();
    }

    public function refresh($data)
    {

        $this->range    = $data['range'];
        $this->from     = $data['from'];
        $this->to       = $data['to'];
        $this->format   = $data['format'];
        $this->interval = $data['interval'];

        $this->queryData();

        $this->dispatchBrowserEvent('render-chart', [
            'labels' => array_keys($this->pageviews),

            'pageviewsdata' => array_values($this->pageviews),
    
            'visitorsdata' => array_values($this->visitors),
        ]);
    }

    public function queryData()
    {

        $this->pageviews = Cache::remember('pageviews:'.$this->range,config('counter.ttl',1), function() {
            return Pageview::select(DB::raw("DATE_FORMAT(created_at, '$this->format') as label"), DB::raw('count(*) as views'))
            ->whereBetween('created_at',[$this->from,$this->to])
            ->orderBy('created_at')
            ->groupBy(DB::raw('label'))
            ->get()->toArray();
        });


        $this->unique = Cache::remember('visitors:'.$this->range,config('counter.ttl',1), function() {
             return Pageview::select(DB::raw("DATE_FORMAT(created_at, '$this->format') as label"), DB::raw('count(*) as views'))
            ->whereBetween('created_at',[$this->from,$this->to])
            ->where('fresh_visit',true)
            ->orderBy('created_at')
            ->groupBy(DB::raw('label'))
            ->get()->toArray();
        });

        $period = CarbonPeriod::create($this->from, '1 '.$this->interval, $this->to);   

        $dates = [];

        foreach ($period as $date) {
            $dates[$date->format(str_replace(['%M','%d','%l','%p','%b','%i'],['F','d','g','A','M','i'], $this->format))] = 0;
        }

        $views = [];
        $visitors = [];

        foreach ($this->pageviews as $pageview) {
            $views[$pageview['label']] = $pageview['views'];
        }


        foreach ($this->unique as $unique) {
            $visitors[$unique['label']] = $unique['views'];
        }

        $this->pageviews = array_merge($dates,$views);

        $this->visitors = array_merge($dates,$visitors);



    }


    public function render()
    {

        return view('livewire.widgets.main',[
            'labels' => array_keys($this->pageviews),

            'pageviewsdata' => array_values($this->pageviews),
    
            'visitorsdata' => array_values($this->visitors),

            'pageviewsCount' => array_sum($this->pageviews),

            'visitorsCount' => array_sum($this->visitors),
        ]);
    }
}
