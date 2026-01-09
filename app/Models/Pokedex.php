<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    /**
     * Use the non-standard plural table name created by the migration.
     */
    protected $table = 'pokedexs';

    protected $fillable = [
        'name', 'type', 'species', 'height', 'weight', 'hp', 'attack', 'defense', 'image_url'
    ];
}
