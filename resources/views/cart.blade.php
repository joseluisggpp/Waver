@extends('layouts.app')

@section('title', 'Carrito')

@section('content')
<div class="cart-container">
    <div class="products-list">
        @foreach ($products as $product)
        <div class="product">
            <div class="product-info">
                {{-- Aquí se debería mostrar la imagen, pero lo omitimos por ahora --}}
                {{-- <img src="{{ asset($product->product->cancion->imagen) }}" alt="Product Image" class="product-image"> --}}
                <div class="product-details">
                    <span class="product-name">{{ $product->product->nombreProducto }}</span>
                    <span class="product-price">{{ $product->product->precio }}€</span>
                    <div class="quantity">
                        {{-- Eliminación del formulario de actualización --}}
                    </div>
                </div>
            </div>
            <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="remove-button">Eliminar</button>
            </form>
        </div>
        @endforeach
    </div>
    <div class="summary">
        <h2>Resumen del Pedido</h2>
        <div class="summary-item">
            <span>Subtotal</span>
            <span>{{ $subtotal }}€</span>
        </div>
        <div class="summary-item">
            <span>IVA (21%)</span>
            <span>{{ $iva }}€</span>
        </div>
        <div class="summary-item total">
            <span>Total</span>
            <span>{{ $total }}€</span>
        </div>
        <button class="checkout-button">Pagar</button>
    </div>
</div>
@endsection