@extends('layouts.app')

@section('content')
<h1>Crea un nuovo Pokémon</h1>


@if ($errors->any())
<!-- @dd($errors) -->
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('pokemons.store') }}" method="POST" class="mt-4">
  @csrf
  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="form">Forma:</label>
    <input type="text" id="form" name="form" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="type1">Tipo:</label>
    <input type="text" id="type1" name="type1" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="type2">Secondo tipo:</label>
    <input type="text" id="type2" name="type2" class="form-control">
  </div>

  <div class="form-group">
    <label for="total">Totale:</label>
    <input type="number" id="total" name="total" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="hp">HP:</label>
    <input type="number" id="hp" name="hp" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="attack">Attacco:</label>
    <input type="number" id="attack" name="attack" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="defense">Difesa:</label>
    <input type="number" id="defense" name="defense" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="sp_atk">Attacco Speciale:</label>
    <input type="number" id="sp_atk" name="sp_atk" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="sp_def">Difesa Speciale:</label>
    <input type="number" id="sp_def" name="sp_def" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="speed">Velocità:</label>
    <input type="number" id="speed" name="speed" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="generation">Generazione:</label>
    <input type="number" id="generation" name="generation" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Salva Pokémon</button>
</form>
@endsection