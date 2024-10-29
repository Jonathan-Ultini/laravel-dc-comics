@extends('layouts.app')

@section('content')
<h1>Lista di Pokémon</h1>
<a href="{{ route('pokemons.create') }}">Crea nuovo Pokémon</a>
<ul>
  @foreach($pokemons as $pokemon)
  <li>
    <a href="{{ route('pokemons.show', $pokemon->id) }}">
      {{ $pokemon->name }} - Tipo: {{ $pokemon->type1 }}
    </a>
  </li>
  @endforeach
</ul>
@endsection