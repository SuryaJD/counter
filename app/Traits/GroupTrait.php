<?php

namespace App\Traits;
use Illuminate\Support\Carbon;
use Carbon\CarbonPeriod;

trait GroupTrait{

    public $data;
    
    public function group()
    {      

        if ($this->range == 'today') {
            
            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('H A');
            })->map->count()->toArray();

        }elseif ($this->range == 'yesterday') {

            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('H A');
            })->map->count()->toArray();

        }elseif ($this->range == 'last_7_days') {

            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('d M');
            })->map->count()->toArray();

        }elseif ($this->range == 'last_30_days') {

            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('d M');
            })->map->count()->toArray();

        }elseif ($this->range == 'this_month') {

            $countPerDay = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('d M');
            })->map->count()->toArray();

                        
            $period = CarbonPeriod::create(Carbon::now()->firstOfMonth(), '1 days', Carbon::now()->lastOfMonth());   
            $dates = [];
            foreach ($period as $date) {
                $dates[$date->format('d M')] = 0;
            }
    

            $this->data = array_merge($dates,$countPerDay);

        }elseif ($this->range == 'last_month') {
            
            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('d M');
            })->map->count()->toArray();

        }elseif ($this->range == 'this_year') {
           
            $this->data = $this->pageviews->groupBy(function($pageview) {
                return $pageview->created_at->format('M');
            })->map->count()->toArray();

        }
        
    }

}