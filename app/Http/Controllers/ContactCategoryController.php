<?php

namespace App\Http\Controllers;

use App\Models\ContactCategory;
use App\Http\Requests\StoreContactCategoryRequest;
use App\Http\Requests\UpdateContactCategoryRequest;

class ContactCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows=ContactCategory::all();
        return view('settings.title-listing', ['rows'=>$rows]);
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
    public function store(StoreContactCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactCategory $contactCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactCategory $contactCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactCategoryRequest $request, ContactCategory $contactCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactCategory $contactCategory)
    {
        //
    }
}
