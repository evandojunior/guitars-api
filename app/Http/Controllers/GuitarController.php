<?php

namespace App\Http\Controllers;

use App\Guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header('Access-Control-Allow-Origin: *'); 
        $guitars = Guitar::all();
        return response()->json([
          'data' => $guitars
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guitar $guitar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
        //
    }
}
