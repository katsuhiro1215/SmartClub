<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuardianProfileRequest;
use App\Http\Requests\UpdateGuardianProfileRequest;
use App\Models\GuardianProfile;

class GuardianProfileController extends Controller
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
     * @param  \App\Http\Requests\StoreGuardianProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuardianProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuardianProfile  $guardianProfile
     * @return \Illuminate\Http\Response
     */
    public function show(GuardianProfile $guardianProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuardianProfile  $guardianProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(GuardianProfile $guardianProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuardianProfileRequest  $request
     * @param  \App\Models\GuardianProfile  $guardianProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuardianProfileRequest $request, GuardianProfile $guardianProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuardianProfile  $guardianProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuardianProfile $guardianProfile)
    {
        //
    }
}
