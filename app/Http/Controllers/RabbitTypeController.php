<?php

namespace App\Http\Controllers;

use App\Models\RabbitType;
use App\Http\Requests\StoreRabbitTypeRequest;
use App\Http\Requests\UpdateRabbitTypeRequest;

class RabbitTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreRabbitTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRabbitTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RabbitType  $rabbitType
     * @return \Illuminate\Http\Response
     */
    public function show(RabbitType $rabbitType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RabbitType  $rabbitType
     * @return \Illuminate\Http\Response
     */
    public function edit(RabbitType $rabbitType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRabbitTypeRequest  $request
     * @param  \App\Models\RabbitType  $rabbitType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRabbitTypeRequest $request, RabbitType $rabbitType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RabbitType  $rabbitType
     * @return \Illuminate\Http\Response
     */
    public function destroy(RabbitType $rabbitType)
    {
        //
    }
}
