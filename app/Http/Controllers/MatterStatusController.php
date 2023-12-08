<?php

namespace App\Http\Controllers;

use App\Models\MatterStatus;
use App\Http\Requests\StoreMatterStatusRequest;
use App\Http\Requests\UpdateMatterStatusRequest;

class MatterStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['heads']=['title'];
        $data['data']=MatterStatus::all();
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
    public function store(StoreMatterStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MatterStatus $matterStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MatterStatus $matterStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatterStatusRequest $request, MatterStatus $matterStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MatterStatus $matterStatus)
    {
        //
    }
}
