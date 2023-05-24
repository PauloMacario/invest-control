<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDividendRequest;
use App\Http\Requests\UpdateDividendRequest;
use App\Models\Dividend;

class DividendController extends Controller
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
     * @param  \App\Http\Requests\StoreDividendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDividendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dividend  $dividend
     * @return \Illuminate\Http\Response
     */
    public function show(Dividend $dividend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dividend  $dividend
     * @return \Illuminate\Http\Response
     */
    public function edit(Dividend $dividend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDividendRequest  $request
     * @param  \App\Models\Dividend  $dividend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDividendRequest $request, Dividend $dividend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dividend  $dividend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dividend $dividend)
    {
        //
    }
}
