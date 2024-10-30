@extends('layouts.app')

@section('content')
<h1>{{ $pokemon->name }}</h1>
<ul class="list-group mt-4">
  <li class="list-group-item">Forma: {{ $pokemon->form }}</li>
  <li class="list-group-item">Tipo: {{ $pokemon->type1 }}</li>
  <li class="list-group-item">Tipo 2: {{ $pokemon->type2 }}</li>
  <li class="list-group-item">Totale: {{ $pokemon->total }}</li>
  <li class="list-group-item">HP: {{ $pokemon->hp }}</li>
  <li class="list-group-item">Attacco: {{ $pokemon->attack }}</li>
  <li class="list-group-item">Difesa: {{ $pokemon->defense }}</li>
  <li class="list-group-item">Attacco Speciale: {{ $pokemon->{'sp_atk'} }}</li>
  <li class="list-group-item">Difesa Speciale: {{ $pokemon->{'sp_def'} }}</li>
  <li class="list-group-item">Velocità: {{ $pokemon->speed }}</li>
  <li class="list-group-item">Generazione: {{ $pokemon->generation }}</li>
</ul>
<a href="{{ route('pokemons.index') }}" class="btn btn-secondary mt-3">Torna alla lista</a>
<?php // dd($pokemon->{'sp-atk'}); 
?>
@endsection