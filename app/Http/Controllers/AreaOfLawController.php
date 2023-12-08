<?php

namespace App\Http\Controllers;

use App\Models\AreaOfLaw;
use App\Http\Requests\StoreAreaOfLawRequest;
use App\Http\Requests\UpdateAreaOfLawRequest;

class AreaOfLawController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['heads']=['title'];
        $data['data']=AreaOfLaw::all();
        return view('settings.title-listing', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAreaOfLawRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaOfLaw $areaOfLaw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AreaOfLaw $areaOfLaw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAreaOfLawRequest $request, AreaOfLaw $areaOfLaw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AreaOfLaw $areaOfLaw)
    {
        //
    }
}
