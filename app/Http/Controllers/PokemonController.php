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
        // dd($request->all());
        // Log::info('Dati ricevuti:', $request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'form' => 'nullable|string|max:255',
            'type1' => 'required|string|max:255',
            'type2' => 'nullable|string|min:0',
            'total' => 'required|integer|min:0',
            'hp' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
            'sp_atk' => 'required|integer|min:0',
            'sp_def' => 'required|integer|min:0',
            'speed' => 'required|integer|min:0',
            'generation' => 'required|integer|min:0',
        ]);
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
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'form' => 'nullable|string|max:255',
            'type1' => 'required|string|max:255',
            'type2' => 'nullable|string|max:255',
            'total' => 'required|integer|min:0',
            'hp' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
            'sp_atk' => 'required|integer|min:0',
            'sp_def' => 'required|integer|min:0',
            'speed' => 'required|integer|min:0',
            'generation' => 'required|integer|min:0',
        ]);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());

        return redirect()->route('pokemons.index')->with('success', 'Pokémon aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();

        return redirect()->route('pokemons.index')->with('success', 'Pokémon eliminato con successo!');
    }
}