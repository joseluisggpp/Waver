@extends('layouts.app')

@section('title', 'Cart')

@section('content')

<style>
    .cta-to-detection {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
</style>

<div class="cart-container">
    <div class="products-list">
    </div>
    <div class="subtotal-list">
    </div>
</div>
@stop