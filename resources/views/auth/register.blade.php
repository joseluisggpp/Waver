@extends('layouts.app')

@section('title', 'Registro')

@section('content')

<div class="register-container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h2>Registro</h2>

        <div class="form-group">
            <label for="username">Nombre de usuario</label>
            <input id="username" type="text" name="name" required autofocus>
            @error('name')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

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
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
            @error('password_confirmation')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit">Registrarse</button>
        </div>

        <div class="form-group" style="text-align: center;">
            <a style="color:#121212;text-decoration:underline" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="form-group" style="text-align: center;">
            <p style="color:#121212">¿Ya tienes cuenta? <a href="{{ route('login') }}" style="color:#121212;text-decoration:underline">Inicia sesión aquí</a></p>
        </div>
    </form>
</div>
@stop