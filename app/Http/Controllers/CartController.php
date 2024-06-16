<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Producto;
use App\Models\Song;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los productos del carrito del usuario actual
        $cart = Cart::where('usuarios_idUsuario', auth()->id())->get();

        // Cargar la relación `product` para cada elemento en el carrito
        $products = $cart->map(function ($item) {
            $item->product = Producto::find($item->producto_idProducto);
            return $item;
        });

        // Calcular subtotal, IVA y total
        $subtotal = $products->sum(function ($item) {
            return $item->product ? $item->product->precio * $item->cantidad : 0;
        });

        $iva = $subtotal * 0.21; // Suponiendo un IVA del 21%
        $total = $subtotal + $iva;

        return view('cart', compact('products', 'subtotal', 'iva', 'total'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Producto $producto)
    {
        // Validar que la cantidad sea exactamente 1
        $cantidad = $request->validate([
            'cantidad' => ['required', 'integer', 'min:1', 'max:1'],
        ]);

        // Verificar si el producto ya está en el carrito del usuario
        $carrito = Cart::where('usuarios_idUsuario', auth()->id())
            ->where('producto_idProducto', $producto->id)
            ->first();

        if ($carrito) {
            // Si el producto ya está en el carrito, actualizar la cantidad a 1
            $carrito->cantidad = 1;
            $carrito->save();
        } else {
            // Si el producto no está en el carrito, crear un nuevo registro con cantidad 1
            Cart::create([
                'usuarios_idUsuario' => auth()->id(),
                'producto_idProducto' => $producto->id,
                'cantidad' => 1,
            ]);
        }
    }


    public function add(Song $song)
    {
        // Verificar si el usuario está autenticado
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para añadir productos al carrito.');
        }

        // Obtener el producto asociado a la canción
        $producto = Producto::where('cancion_idCancion', $song->id)->first();

        // Verificar si el producto ya está en el carrito del usuario
        $carrito = Cart::where('usuarios_idUsuario', auth()->id())
            ->where('producto_idProducto', $producto->id)
            ->first();

        if ($carrito) {
            // Si el producto ya está en el carrito, mostrar un mensaje de error
            return redirect()->route('top10songs')->with('error', 'La canción ya está en tu carrito.');
        } else {
            // Si el producto no está en el carrito, crear un nuevo registro con cantidad 1
            Cart::create([
                'usuarios_idUsuario' => auth()->id(),
                'producto_idProducto' => $producto->id,
                'cantidad' => 1, // Cantidad por defecto
            ]);

            return redirect()->route('top10songs')->with('success', 'Canción añadida al carrito correctamente.');
        }
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
        $cart->delete();

        // Redireccionar con mensaje de éxito
        return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito correctamente.');
    }
    public function checkout()
    {
        // Obtener productos en el carrito del usuario actual
        $cartItems = Cart::where('usuarios_idUsuario', auth()->id())->get();

        // Calcular subtotal, IVA y total
        $subtotal = 0;

        foreach ($cartItems as $item) {
            // Verificar si el producto asociado existe
            if ($item->product) {
                $subtotal += $item->product->precio;
            }
        }

        $iva = $subtotal * 0.21; // Suponiendo un IVA del 21%
        $total = $subtotal + $iva;

        // Crear un nuevo pedido en la base de datos
        $order = new Order();
        $order->usuarios_idUsuario = auth()->id(); // ID del usuario actual
        $order->fechaPedido = now(); // Fecha actual
        $order->estado = 'pendiente'; // Estado inicial del pedido
        $order->total = $total;
        $order->save();

        // Asociar productos al pedido (sin especificar cantidad)
        foreach ($cartItems as $item) {
            if ($item->product) {
                $order->products()->attach($item->product->id);
            }
        }

        // Vaciar el carrito (eliminar productos del carrito)
        Cart::where('usuarios_idUsuario', auth()->id())->delete();

        // Redireccionar con mensaje de éxito y actualizar el panel de control
        return redirect()->route('dashboard')->with('success', 'Compra realizada con éxito.');
    }
}
