<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'temps_preparation',
        'temps_cuisson',
        'instructions'
    ];
}
