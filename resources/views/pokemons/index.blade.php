@extends('layouts.app')

@section('content')
<h1>Lista di Pokémon</h1>
<a href="{{ route('pokemons.create') }}" class="btn btn-primary mb-3">Crea nuovo Pokémon</a>

@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif

<ul class="list-group">
  @foreach($pokemons as $pokemon)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <div>
      <a href="{{ route('pokemons.show', $pokemon->id) }}">
        {{ $pokemon->name }} - Tipo: {{ $pokemon->type1 }}
      </a>
    </div>
    <div>
      <!-- Bottone Modifica -->
      <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="btn btn-warning btn-sm mr-2">Modifica</a>

      <!-- Bottone Elimina -->
      <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"
          onclick="return confirm('Sei sicuro di voler eliminare questo Pokémon?')">Elimina</button>
      </form>
    </div>
  </li>
  @endforeach
</ul>
@endsection