<?php

namespace App\Http\Controllers;

use App\Models\NarbaAdmin;
use App\Http\Requests\StoreNarbaAdminRequest;
use App\Http\Requests\UpdateNarbaAdminRequest;

class NarbaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.narba_admin.index');
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
     * @param  \App\Http\Requests\StoreNarbaAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNarbaAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NarbaAdmin  $narbaAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(NarbaAdmin $narbaAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NarbaAdmin  $narbaAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(NarbaAdmin $narbaAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNarbaAdminRequest  $request
     * @param  \App\Models\NarbaAdmin  $narbaAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNarbaAdminRequest $request, NarbaAdmin $narbaAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NarbaAdmin  $narbaAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(NarbaAdmin $narbaAdmin)
    {
        //
    }
}
