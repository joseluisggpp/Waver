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
                    <div class="product-chars"><span class="product-name">{{ $product->product->nombreProducto }}</span>
                        <span class="product-artist">{{ $product->product->artista }}</span>
                    </div>
                    <div class="product-digits"><span class="product-price">{{ $product->product->precio }}€</span></div>

                </div>
            </div>
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
        <form method="POST" action="{{ route('cart.checkout')}}">
            @csrf
            <button type="submit" class="checkout-button">Pagar</button>
        </form>
    </div>
</div>
@endsection