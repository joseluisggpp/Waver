<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cart = Cart::all()->where('usuarios_idUsuario', auth()->id());

        return view('cart', [
            'products' => $cart->map(function ($producto) {
                $producto['product'] = Producto::find($producto['producto_idProducto']);
            }),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Producto $producto)
    {
        //
        $cantidad = $request->validate([
            'cantidad' => ['min:0'],
        ]);
        
        $carrito = Cart::all()->firstWhere('producto_idProducto', $producto->id);
        if (($carrito)) {
            $carrito->cantidad += $cantidad['cantidad'];
            $carrito->save();
        } else {

            Cart::create([
                'usuarios_idUsuario' => auth()->id(),
                'producto_idProducto' => $producto->id,
                'cantidad' => $cantidad['cantidad'],
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
