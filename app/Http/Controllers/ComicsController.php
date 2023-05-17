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
        return view('create_comics');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComics = new comics();

        $newComics->title = $data['title'];
        $newComics->desc = $data['desc'];
        $newComics->thumb = $data['thumb'];
        $newComics->price = $data['price'];
        $newComics->series = $data['series'];
        $newComics->sales_date = $data['sales_date'];
        $newComics->type = $data['type'];

        $newComics->save();

        return redirect()->route('comics.show', $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(comics $comic)
    {
        return view('comic_page', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(comics $comic)
    {
        return view('edit_comics', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comics $comic)
    {
        $data = $request->all();


        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
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
