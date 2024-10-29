<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'form', 'type1', 'type2', 'total', 'hp', 'atttack', 'defense', 'sp-atk', 'sp-def', 'speed', 'generation'];
}
