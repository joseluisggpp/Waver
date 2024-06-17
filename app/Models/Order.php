<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'pedidos'; // Nombre de la tabla en la base de datos

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
    public static function getProducts()
    {
        return self::query()
            ->select('producto.*')
            ->join('pedido_producto', 'producto.id', '=', 'pedido_producto.producto_id')
            ->join('pedidos', 'pedido_producto.pedido_id', '=', 'pedidos.id')
            ->from('producto')
            ->where('pedidos.usuarios_idUsuario', auth()->id())
            ->distinct()
            ->get();
    }
}
