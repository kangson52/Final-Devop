<?php

namespace App\Http\Controllers;

use App\Models\TerrainImage;
use App\Http\Requests\StoreTerrainImageRequest;
use App\Http\Requests\UpdateTerrainImageRequest;

class TerrainImageController extends Controller
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
     * @param  \App\Http\Requests\StoreTerrainImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTerrainImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TerrainImage  $terrainImage
     * @return \Illuminate\Http\Response
     */
    public function show(TerrainImage $terrainImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TerrainImage  $terrainImage
     * @return \Illuminate\Http\Response
     */
    public function edit(TerrainImage $terrainImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTerrainImageRequest  $request
     * @param  \App\Models\TerrainImage  $terrainImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTerrainImageRequest $request, TerrainImage $terrainImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TerrainImage  $terrainImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TerrainImage $terrainImage)
    {
        //
    }
}
