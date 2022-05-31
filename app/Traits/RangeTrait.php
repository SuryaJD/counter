<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Types\Boolean;

trait RangeTrait {

    public string $range = 'this_month';

    public Carbon $from;

    public Carbon $to;

    public $format;

    public $interval;

    public function findRange()
    {
        if ($this->range == 'today') {
            $this->from = Carbon::today()->startOfDay();
            $this->to   = Carbon::today()->endOfDay();
            $this->format = '%l %p';
            $this->interval = 'hours';

        }elseif ($this->range == 'yesterday') {

            $this->from = Carbon::yesterday()->startOfDay();
            $this->to   = Carbon::yesterday()->endOfDay();
            $this->format = '%l %p';
            $this->interval = 'hours';

        }elseif ($this->range == 'last_7_days') {

            $this->from = Carbon::today()->subDays(6);
            $this->to = Carbon::today()->endOfDay();
            $this->format = '%d %b';
            $this->interval = 'days';

        }elseif ($this->range == 'last_30_days') {

            $this->from = Carbon::today()->subDays(29);
            $this->to = Carbon::today()->endOfDay();
            $this->format = '%d %b';
            $this->interval = 'days';

        }elseif ($this->range == 'this_week') {

            $this->from = Carbon::today()->startOfWeek();
            $this->to   = Carbon::today()->endOfWeek();
            $this->format = '%d %b';
            $this->interval = 'days';

        }elseif ($this->range == 'this_month') {

            $this->from = Carbon::today()->startOfMonth();
            $this->to   = Carbon::today()->endOfMonth();
            $this->format = '%d %b';
            $this->interval = 'days';

        }elseif ($this->range == 'last_month') {

            $this->from = Carbon::today()->subMonth()->startOfMonth();
            $this->to   = Carbon::today()->subMonth()->endOfMonth();
            $this->format = '%d %b';
            $this->interval = 'days';

        }elseif ($this->range == 'this_year') {

            $this->from = Carbon::today()->startOfYear();
            $this->to   = Carbon::today()->endOfYear();
            $this->format = '%d %b';
            $this->interval = 'days';

        }
    }


}
