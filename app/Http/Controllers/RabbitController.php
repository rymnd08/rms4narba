<?php

namespace App\Http\Controllers;

use App\Models\Rabbit;
use App\Http\Requests\StoreRabbitRequest;
use App\Http\Requests\UpdateRabbitRequest;

class RabbitController extends Controller
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
     * @param  \App\Http\Requests\StoreRabbitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRabbitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rabbit  $rabbit
     * @return \Illuminate\Http\Response
     */
    public function show(Rabbit $rabbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rabbit  $rabbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Rabbit $rabbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRabbitRequest  $request
     * @param  \App\Models\Rabbit  $rabbit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRabbitRequest $request, Rabbit $rabbit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rabbit  $rabbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rabbit $rabbit)
    {
        //
    }
}
