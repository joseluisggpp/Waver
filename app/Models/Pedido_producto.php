<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_producto extends Model
{

    use HasFactory;
    protected $fillable = [
        'pedido_id',
        'producto_id'
    ];
    protected $table = 'pedido_producto';
}
