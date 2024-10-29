<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemons.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Log::info('Dati ricevuti:', $request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'form' => 'required|string|max:255',
            'type1' => 'required|string|max:255',
            'type2' => 'nullable|string|min:0',
            'total' => 'required|integer|min:0',
            'hp' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
            'sp-atk' => 'required|integer|min:0',
            'sp-def' => 'required|integer|min:0',
            'speed' => 'required|integer|min:0',
            'generation' => 'required|integer|min:0',
        ]);
        dd($request->all());
        Pokemon::create($request->all());
        return redirect()->route('pokemons.index')->with('success', 'Pokémon creato con successo!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.show', compact('pokemon'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
