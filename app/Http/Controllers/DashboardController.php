<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Producto;
use App\Models\Pedido_producto;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $orders = Order::where("usuarios_idUsuario", $user->id)->get();

        // Obtener los productos de cada pedido
        $products = $orders->map(function ($order) {
            $pedido_productos = Pedido_producto::where("pedido_id", $order->id)->get();
            return $pedido_productos->map(function ($pedido_producto) {
                return Producto::find($pedido_producto->producto_id);
            });
        });

        return view('dashboard', [
            'user' => $user,
            'orders' => $orders,
            'products' => $products,
        ]);
    }
}
