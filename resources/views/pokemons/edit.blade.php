@extends('layouts.app')

@section('content')
<h1>Modifica Pokémon</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


<form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST" class="mt-4">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $pokemon->name) }}" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="form">Forma:</label>
    <input type="text" id="form" name="form" value="{{ old('form', $pokemon->form) }}" class="form-control">
  </div>

  <div class="form-group">
    <label for="type1">Tipo:</label>
    <input type="text" id="type1" name="type1" value="{{ old('type1', $pokemon->type1) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="type2">Secondo tipo:</label>
    <input type="text" id="type2" name="type2" value="{{ old('type2', $pokemon->type2) }}" class="form-control">
  </div>

  <div class="form-group">
    <label for="total">Totale:</label>
    <input type="number" id="total" name="total" value="{{ old('total', $pokemon->total) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="hp">HP:</label>
    <input type="number" id="hp" name="hp" value="{{ old('hp', $pokemon->hp) }}" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="attack">Attacco:</label>
    <input type="number" id="attack" name="attack" value="{{ old('attack', $pokemon->attack) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="defense">Difesa:</label>
    <input type="number" id="defense" name="defense" value="{{ old('defense', $pokemon->defense) }}"
      class="form-control" required>
  </div>

  <div class="form-group">
    <label for="sp_atk">Attacco Speciale:</label>
    <input type="number" id="sp_atk" name="sp_atk" value="{{ old('sp_atk', $pokemon->sp_atk) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="sp_def">Difesa Speciale:</label>
    <input type="number" id="sp_def" name="sp_def" value="{{ old('sp_def', $pokemon->sp_def) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="speed">Velocità:</label>
    <input type="number" id="speed" name="speed" value="{{ old('speed', $pokemon->speed) }}" class="form-control"
      required>
  </div>

  <div class="form-group">
    <label for="generation">Generazione:</label>
    <input type="number" id="generation" name="generation" value="{{ old('generation', $pokemon->generation) }}"
      class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Aggiorna Pokémon</button>
  <a href="{{ route('pokemons.index') }}" class="btn btn-secondary">Torna Indietro</a>
</form>
@endsection