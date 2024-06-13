@extends('layouts.app')

@section('title', 'Olvidaste Contraseña')

@section('content')

<div class="reset-password-container">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente indícanos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus>
            @error('email')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group" style="text-align: center;">
            <button type="submit">Enviar Enlace de Restablecimiento</button>
        </div>
    </form>
</div>
@stop