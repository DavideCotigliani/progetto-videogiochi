<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        return view("videogames.index", compact("videogames"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newVideogame = new Videogame();
        $newVideogame->name = $data['name'];
        $newVideogame->release_year = $data['release_year'];
        $newVideogame->language = $data['language'];

        $newVideogame->description = $data['description'];

        if (array_key_exists("image", $data)) {

            $img_url = Storage::putFile("videogames", $data['image']);
        }
        $newVideogame->image = $img_url;

        $newVideogame->save();

        return redirect()->route("videogames.show", $newVideogame);

    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {

        return view("videogames.show", compact("videogame"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        return view("videogames.edit", compact("videogame"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();
        $videogame->name = $data['name'];
        $videogame->release_year = $data['release_year'];
        $videogame->language = $data['language'];

        $videogame->description = $data['description'];


        // Carico l'immagine solo se presente
        if ($request->hasFile('image')) {
            // se c'è già un'immagine, eliminiamola
            if ($videogame->image) {
                Storage::delete($videogame->image);
            }

            // salva la nuova immagine sul disco "public"
            $img_url = $request->file('image')->store('books', 'public');
            $videogame->image = $img_url;
        }


        $videogame->update();
        return redirect()->route("videogames.show", $videogame);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        if ($videogame->image) {
            Storage::delete($videogame->image);
        }
        $videogame->delete();
        return redirect()->route("videogames.index");
    }
}
