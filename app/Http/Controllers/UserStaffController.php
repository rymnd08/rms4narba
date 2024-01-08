<?php

namespace App\Http\Controllers;

use App\Models\UserStaff;
use App\Http\Requests\StoreUserStaffRequest;
use App\Http\Requests\UpdateUserStaffRequest;

class UserStaffController extends Controller
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
     * @param  \App\Http\Requests\StoreUserStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserStaffRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserStaff  $userStaff
     * @return \Illuminate\Http\Response
     */
    public function show(UserStaff $userStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserStaff  $userStaff
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStaff $userStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserStaffRequest  $request
     * @param  \App\Models\UserStaff  $userStaff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserStaffRequest $request, UserStaff $userStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserStaff  $userStaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStaff $userStaff)
    {
        //
    }
}
