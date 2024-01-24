<?php

namespace App\Http\Controllers;

use App\Models\PredefineSms;
use App\Http\Requests\StorePredefineSmsRequest;
use App\Http\Requests\UpdatePredefineSmsRequest;

class PredefineSmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows=PredefineSms::all();
        return view('settings.sms-listing', ['rows'=>$rows]);
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
    public function store(StorePredefineSmsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PredefineSms $predefineSms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PredefineSms $predefineSms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePredefineSmsRequest $request, PredefineSms $predefineSms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PredefineSms $predefineSms)
    {
        //
    }
}
