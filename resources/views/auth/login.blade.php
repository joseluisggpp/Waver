@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')



<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>Iniciar Sesión</h2>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus>
            @error('email')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
            @error('password')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Recordarme</label>
        </div>

        <div class="form-group">
            <button type="submit">Iniciar Sesión</button>
        </div>

        <div class="form-group" style="text-align: center;">
            <a style="color:#121212;text-decoration:underline;" href=" {{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="form-group" style="text-align: center;">
            <p style="color:#121212">¿Aún no tienes cuenta? Regístrate <a href="{{ route('register') }}" style="color:#121212;text-decoration:underline">aquí</a></p>
        </div>
    </form>
</div>
@stop