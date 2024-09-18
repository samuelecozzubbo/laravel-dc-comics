<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        //VALIDAZIONE DATI
        // $request->validate([
        //     'title' => 'required|min:3|max:50',
        //     'thumb' => 'required',
        //     'price' => 'required|min:3|max:20',
        //     'series' => 'required|min:3|max:100',
        //     'sale_date' => 'required|date|max:50',
        //     'type' => 'required|min:3|max:50',

        // ], [
        //     'title.required' => 'Il campo titolo è obbligatorio.',
        //     'title.min' => 'Il titolo deve avere almeno :min caratteri.',
        //     'title.max' => 'Il titolo non può superare :max caratteri.',
        //     'thumb.required' => 'Immagine di copertina obbligatoria.',
        //     'price.required' => 'Il prezzo è obbligatorio.',
        //     'price.min' => 'Il prezzo deve essere lungo almeno :min caratteri.',
        //     'price.max' => 'Il prezzo non può superare :max caratteri.',
        //     'series.required' => 'La serie è obbligatoria.',
        //     'series.min' => 'Il nome della serie deve avere almeno :min caratteri.',
        //     'series.max' => 'Il nome della serie non può superare :max caratteri.',
        //     'sale_date.required' => 'La data di vendita è obbligatoria.',
        //     'sale_date.date' => 'Inserisci una data valida.',
        //     'sale_date.max' => 'La data di vendita non può superare :max caratteri.',
        //     'type.required' => 'Il tipo di fumetto è obbligatorio.',
        //     'type.min' => 'Il tipo di fumetto deve avere almeno :min caratteri.',
        //     'type.max' => 'Il tipo di fumetto non può superare :max caratteri.',
        // ]);


        //Creazione Nuovo fumetto
        $data = $request->all();
        $new_comic = new Comic();
        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];
        $new_comic->save();
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic_to_edit = Comic::find($id);
        return view('comics.edit', compact('comic_to_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $comic_to_update = Comic::find($id);
        $comic_to_update->update($data);
        return redirect()->route('comics.show', $comic_to_update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', 'fumetto cancellatto correttamente');
    }
}
