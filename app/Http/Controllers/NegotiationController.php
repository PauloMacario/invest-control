<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegotiationRequest;
use App\Http\Requests\UpdateNegotiationRequest;
use App\Models\Negotiation;

class NegotiationController extends Controller
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
     * @param  \App\Http\Requests\StoreNegotiationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNegotiationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Negotiation  $negotiation
     * @return \Illuminate\Http\Response
     */
    public function show(Negotiation $negotiation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Negotiation  $negotiation
     * @return \Illuminate\Http\Response
     */
    public function edit(Negotiation $negotiation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNegotiationRequest  $request
     * @param  \App\Models\Negotiation  $negotiation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNegotiationRequest $request, Negotiation $negotiation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Negotiation  $negotiation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Negotiation $negotiation)
    {
        //
    }
}
