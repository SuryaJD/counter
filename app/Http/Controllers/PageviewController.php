<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageviewRequest;
use Jenssegers\Agent\Agent;
use App\Models\Pageview;
use Illuminate\Http\Request;

class PageviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageviewRequest $request)
    {
        // $detect = new Agent();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pageviews  $pageviews
     * @return \Illuminate\Http\Response
     */
    public function show(Pageviews $pageviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pageviews  $pageviews
     * @return \Illuminate\Http\Response
     */
    public function edit(Pageviews $pageviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pageviews  $pageviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pageviews $pageviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pageviews  $pageviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pageviews $pageviews)
    {
        //
    }
}
