<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Counter related configuration
    |--------------------------------------------------------------------------
    |
    */

    'prefix' => env('COUNTER_ENDPOINT_PREFIX','api'),

    'main_graph' => env('MAIN_GRAPH','bar'),

    'barThickness' => env('BAR_THICKNESS','Thin') // Available options are Thin or Normal

];
