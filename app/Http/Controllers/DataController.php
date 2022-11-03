<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\datas;
use App\Jobs\StartBuildJob;
use Illuminate\Http\Request;
use App\Actions\ServiceProviderAction;
use Cache;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceProviderAction $serviceProvider)
    {
        $mtn = Cache::rememberForever('mtn', function() use($serviceProvider){
           return $serviceProvider->mtnData()['data'];
        });

        $airtel = Cache::rememberForever('airtel', function()use($serviceProvider){
            return $serviceProvider->airtelData()['data'];
        });

        $etisalat= Cache::rememberForever('etisalat', function()use($serviceProvider){
            return $serviceProvider->etisalatData()['data'];
        });
        
        
        $glo = Cache::rememberForever('glo', function()use($serviceProvider){
           return  $serviceProvider->gloData()['data'];

        });

        return view('data', compact('mtn', 'airtel', 'glo', 'etisalat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
