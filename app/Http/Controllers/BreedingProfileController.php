<?php

namespace App\Http\Controllers;

use App\Models\BreedingProfile;
use App\Http\Requests\StoreBreedingProfileRequest;
use App\Http\Requests\UpdateBreedingProfileRequest;

class BreedingProfileController extends Controller
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
     * @param  \App\Http\Requests\StoreBreedingProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBreedingProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BreedingProfile  $breedingProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BreedingProfile $breedingProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BreedingProfile  $breedingProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(BreedingProfile $breedingProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBreedingProfileRequest  $request
     * @param  \App\Models\BreedingProfile  $breedingProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBreedingProfileRequest $request, BreedingProfile $breedingProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BreedingProfile  $breedingProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(BreedingProfile $breedingProfile)
    {
        //
    }
}
