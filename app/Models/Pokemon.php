<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    protected $fillable = ['name', 'form', 'type1', 'type2', 'total', 'hp', 'attack', 'defense', 'sp_atk', 'sp_def', 'speed', 'generation'];
}