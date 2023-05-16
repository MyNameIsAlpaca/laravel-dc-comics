<?php

namespace App\Http\Controllers;

use App\Models\comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comics::all();
        return view('home', compact('comics'));
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
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comics::findOrFail($id);
        return view('comic_page', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(comics $comics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comics $comics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(comics $comics)
    {
        //
    }
}
