<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "<h1>Photos Index</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "<h1>Photos Create</h1>";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<h1>Photos Store</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "<h1>Photos Show</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "<h1>Photos Edit</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "<h1>Photos Update</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "<h1>Photos Destroy</h1>";
    }
}
