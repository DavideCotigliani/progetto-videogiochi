<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {
        $videogames = Videogame::all();

        // aggiungi image_url per ogni libro
        $videogames->each(function ($videogame) {
            $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;
        });
        return response()->json(
            ["success" => true,
                    "data" => $videogames]
        );

    }

    public function show(Videogame $videogame)
    {
        // $videogame->load(); // serve per caricare relazioni

        // aggiungi un campo image_url per React
        $videogame->image_url = $videogame->image ? asset('storage/' . $videogame->image) : null;

        return response()->json(
            ["success" => true,
                    "data" => $videogame]
        );
    }
}
