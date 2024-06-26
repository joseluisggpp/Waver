<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    use HasFactory;
    protected $fillable = [
        "titulo",
        "artista",
        "imagen_album"
    ];
    protected $table = 'song'; // Nombre de la tabla en la base de datos
}
