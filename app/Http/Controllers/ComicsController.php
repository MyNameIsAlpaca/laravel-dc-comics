<?php

namespace App\Http\Controllers;

use App\Models\comics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $this->validation($request);

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



        $this->validation($request);

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
    public function destroy(comics $comic)
    {
        $comic->delete();

        return redirect()->route('home');
    }

    private function validation($request)
    {

        $data = $request->all();

        $validator = Validator::make($data, [
            'title' => 'required|max:200',
            'desc' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|max:50',
            'sales_date' => 'required|max:11',
            'type' => 'required|max:30',
        ], [
            'title.required' => 'Il titolo è necessario',
            'title.max' => 'Il titolo non deve essere più lungo di 200 caratteri',
            'desc.required' => 'Aggiungi una descrizione',
            'thumb.required' => "Aggiungi un'immagine",
            'series.required' => "Aggiungi la serie",
            'series.max' => 'La serie non può essere cosi lunga',
            'sales_date.required' => 'Aggiungi una data',
            'sales_data.max' => 'Che razza di data hai aggiunto?',
            'type.required' => 'Aggiungi il tipo del fumetto',
            'type.max' => 'Il tipo di fumetto non può essere cosi lungo',
        ])->validate();
    }
}
