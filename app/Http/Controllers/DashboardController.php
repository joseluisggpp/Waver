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
        $orderDetails = Order::getProducts();
        return view('dashboard', [
            'user' => $user,
            'orders' => $orders,
            'products' => $orderDetails
        ]);
    }
}
