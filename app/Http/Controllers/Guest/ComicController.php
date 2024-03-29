<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic=Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
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
    public function store(Request $request)
    {
        // prima metto il name del campo da applicare => regole da rispettare
       /* $request->validate([
            'title' => ['required', 'unique:pastas', 'min:4', 'max:40'],
            'price' => ['required', 'min:4', 'max:20'],
        ], [
            'titolo.required' => 'You must have a title'
        ]);
        */
        
        $newComicData = $request->all();
        /*per vedere quello che ho scritto nel form
        dd($newComicData['title']);
        */
        $newComic = new Comic();
        $newComic->title = $newComicData['title'];
        $newComic->description = $newComicData['description'];
        $newComic->thumb = $newComicData['thumb'];
        $newComic->price = $newComicData['price'];
        $newComic->series = $newComicData['series'];
        $newComic->save();
        return redirect() ->route('comics.show', $newComic->id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic=Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */

    // prima creo fillable in models e poi cambio string con Model e $id con $variabile
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all(),$id);
        $data=$request->all();
        // $comic=Comic::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
