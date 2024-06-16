<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'pedido'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'usuarios_idUsuario',
        'fechaPedido',
        'total',
        'estado',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'usuarios_idUsuario');
    }
    public function products()
    {
        // Suponiendo que la relación es muchos a muchos, donde un pedido puede tener varios productos
        return $this->belongsToMany(Producto::class, 'pedido_producto', 'order_id', 'producto_id')
            ->withPivot('cantidad'); // Incluir el campo 'cantidad' de la tabla intermedia si es necesario
    }
}
