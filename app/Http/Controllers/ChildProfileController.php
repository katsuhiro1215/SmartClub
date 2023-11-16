<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildProfileRequest;
use App\Http\Requests\UpdateChildProfileRequest;
use App\Models\ChildProfile;

class ChildProfileController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChildProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChildProfile  $childProfile
     * @return \Illuminate\Http\Response
     */
    public function show(ChildProfile $childProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildProfile  $childProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildProfile $childProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChildProfileRequest  $request
     * @param  \App\Models\ChildProfile  $childProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChildProfileRequest $request, ChildProfile $childProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildProfile  $childProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildProfile $childProfile)
    {
        //
    }
}
