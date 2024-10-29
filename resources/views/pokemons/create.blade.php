@extends('layouts.app')

@section('content')
<h1>Crea un nuovo Pokémon</h1>
<form action="{{ route('pokemons.store') }}" method="POST">
  @csrf
  <label for="name">Nome:</label>
  <input type="text" id="name" name="name" required>

  <label for="type1">Tipo:</label>
  <input type="text" id="type1" name="type1" required>

  <label for="type2">Secondo tipo:</label>
  <input type="text" id="type2" name="type2">

  <label for="total">Totale:</label>
  <input type="number" id="total" name="total" required>

  <label for="hp">HP:</label>
  <input type="number" id="hp" name="hp" required>

  <label for="attack">Attacco:</label>
  <input type="number" id="attack" name="attack" required>

  <label for="defense">Difesa:</label>
  <input type="number" id="defense" name="defense" required>

  <label for="sp-atk">Attacco Speciale:</label>
  <input type="number" id="sp-atk" name="sp-atk" required>

  <label for="sp-def">Difesa Speciale:</label>
  <input type="number" id="sp-def" name="sp-def" required>

  <label for="speed">Velocità:</label>
  <input type="number" id="speed" name="speed" required>

  <label for="generation">Generazione:</label>
  <input type="number" id="generation" name="generation" required>

  <button type="submit">Salva Pokémon</button>
</form>
@endsection