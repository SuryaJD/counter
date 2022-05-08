<?php

namespace App\Http\Livewire;

use App\Models\Pageview;
use App\Traits\RangeTrait;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Dashboard extends Component
{
    use RangeTrait;

    protected $queryString = ['range'];

    public function updatedRange($range)
    {   
        $this->findRange();

        $this->emit('refresh',[
            'range'     => $this->range,
            'from'      => $this->from,
            'to'        => $this->to,
            'format'    => $this->format,
            'interval'  => $this->interval
        ]);

    }

    public function mount()
    {
        $this->findRange();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
