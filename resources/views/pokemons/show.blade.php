@extends('layouts.app')

@section('content')
<h1>{{ $pokemon->name }}</h1>
<p>Tipo: {{ $pokemon->type1 }}</p>
<p>Tipo2: {{ $pokemon->type2 }}</p>
<p>Totale: {{ $pokemon->total }}</p>
<p>Hp: {{ $pokemon->hp }}</p>
<p>Attacco: {{ $pokemon->attack }}</p>
<p>Difesa: {{ $pokemon->defense }}</p>
<p>Attacco speciale: {{ $pokemon->sp-atk }}</p>
<p>Difesa speciale: {{ $pokemon->sp-def }}</p>
<p>Velocità: {{ $pokemon->speed }}</p>
<p>Generazione: {{ $pokemon->generation }}</p>
<a href="{{ route('pokemons.index') }}">Torna alla lista</a>
@endsection