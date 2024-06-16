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

        $orderDetails = $orders->map(function ($order) {
            $pedido_productos = Pedido_producto::where("pedido_id", $order->id)->get();
            return $pedido_productos->map(function ($pedido_producto) {
                $producto = Producto::find($pedido_producto->producto_id);
                return [
                    'producto' => $producto,
                    'pedido' => $pedido_producto,
                ];
            });
        });

        return view('dashboard', [
            'user' => $user,
            'orderDetails' => $orderDetails,
        ]);
    }
}
