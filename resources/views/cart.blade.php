@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<div class="cart-container">
    <div class="products-list">
        <div class="product">
            <div class="product-info">
                <img src="product-image.jpg" alt="Product Image" class="product-image">
                <div class="product-details">
                    <span class="product-name">Nombre del Producto</span>
                    <span class="product-price">10.00€</span>
                    <div class="quantity">
                        <input type="number" value="1" min="1" class="quantity-input">
                        <button class="quantity-button">Actualizar</button>
                    </div>
                </div>
            </div>
            <button class="remove-button">Eliminar</button>
        </div>
        <!-- Repite este bloque para más productos -->
    </div>
    <div class="summary">
        <h2>Resumen del Pedido</h2>
        <div class="summary-item">
            <span>Subtotal</span>
            <span>10.00€</span>
        </div>
        <div class="summary-item">
            <span>IVA (21%)</span>
            <span>0</span>
        </div>
        <div class="summary-item total">
            <span>Total</span>
            <span>10.00€</span>
        </div>
        <button class="checkout-button">Pagar</button>
    </div>
</div>
@stop