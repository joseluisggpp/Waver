@extends('layouts.app')

@section('title', 'Contacto')

@section('content')

<div class="login-container">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h2>¡Contacta con nosotros!</h2>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required autofocus>
        </div>

        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input id="phone" type="tel" name="phone" required autofocus>
        </div>

        <div class="form-group">
            <label for="comments">Comentarios</label>
            <textarea id="comments" name="comments" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
@stop