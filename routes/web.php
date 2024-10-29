<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::resource('pokemons', PokemonController::class);
