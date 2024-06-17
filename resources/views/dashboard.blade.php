@extends('layouts.app')

@section('title', 'Panel de Control del Usuario')

@section('content')
<div class="container">
    <div class="card-header">
        <h1>Panel de Control del Usuario</h1>
    </div>
    <div class="row">
        <!-- Columna izquierda con datos de la cuenta y botones -->
        <div class="column left">
            <div class="card">
                <div class="card-header">Mis datos</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" value="{{ $user->password }}">
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Método de pago</label>
                            <input type="text" class="form-control" id="payment_method" value="{{ $user->payment_method }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                    <button class="btn btn-danger logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Eliminar Cuenta</div>
                <div class="card-body">
                    <form id="delete-account-form" action="{{ route('profile.destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="form-group">
                            <label for="password">Contraseña actual</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" class="btn btn-danger">Eliminar Cuenta</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Columna derecha con pedidos, biblioteca e historial de búsquedas -->
        <div class="column right">
            <div class="card">
                <div class="card-header">Mis pedidos</div>
                <div class="card-body">
                    <div class="order-list">
                        @foreach ($orders as $order)
                        <div class="order-container">
                            <div class="order-header"><strong>Pedido</strong></div>
                            <div class="span-container">
                                <span>Total: {{$order->total}}€, </span>
                                <span>Estado: {{$order->estado}}, </span>
                                <span>Fecha de Pedido: {{$order->fechaPedido}}</span>
                            </div>
                        </div>
                        @endforeach
                        </d>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Biblioteca</div>
                    <div class="card-body">
                        <div class="order-list">
                            @foreach ($products as $product)
                            <div class="order-container">
                                <div class="order-header"><strong>Producto</strong></div>
                                <div class="span-container">
                                    <span>Título: {{$product->nombreProducto}}, </span>
                                    <span>Artista: {{$product->artista}}, </span>
                                    <span>Álbum: {{$product->album}}</span>
                                </div>
                            </div>
                            @endforeach
                            </d>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Historial de Búsquedas</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>Rocket man - Elton John - 10/4/2024</li>
                            <li>Rocket man - Elton John - 10/4/2024</li>
                            <li>Rocket man - Elton John - 10/4/2024</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection