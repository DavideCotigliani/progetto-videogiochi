<?php

use App\Http\Controllers\Api\VideogameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("videogames", [VideogameController::class, "index"]); // rotta per index API

Route::get("videogames/{videogame}", [VideogameController::class, "show"]); // rotta per show API
