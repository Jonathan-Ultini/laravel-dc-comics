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
  <li class="list-group-item">
    <a href="{{ route('pokemons.show', $pokemon->id) }}">
      {{ $pokemon->name }} - Tipo: {{ $pokemon->type1 }}
    </a>
  </li>
  @endforeach
</ul>
@endsection