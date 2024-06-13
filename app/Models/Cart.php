<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carrito';
    protected $fillable = [
        'usuarios_idUsuario',
        'producto_idProducto',
        'cantidad',
    ];
}
