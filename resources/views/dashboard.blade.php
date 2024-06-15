@extends('layouts.app')

@section('title', 'Panel de Control del Usuario')

@section('content')
<div class="col-9">
    <div>
        <h1>Panel de Control del Usuario</h1>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <button class="btn btn-danger logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Cerrar Sesión
        </button>
    </div>
    <div class="container">
        <div class="grid-container">
            <div class="card">
                <div class="card-header">Mis datos</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" id="address" value="{{ $user->address }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" value="{{ $user->password }}">
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Método de pago</label>
                            <input type="text" class="form-control" id="payment_method" value="{{ $user->payment_method }}">
                        </div>
                        <button type="submit" class="btn">Actualizar</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Mis pedidos</div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Rocket man - Elton John - 10€ - 10/4/2024</li>
                        <li>Rocket man - Elton John - 10€ - 10/4/2024</li>
                        <li>Rocket man - Elton John - 10€ - 10/4/2024</li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Biblioteca</div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Rocket man - Elton John - 4:42</li>
                        <li>Mask off - Future - 3:25</li>
                        <li>Rocket man - Elton John - 4:42</li>
                    </ul>
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
    @stop