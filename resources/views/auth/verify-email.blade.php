@extends('layouts.app')

@section('title', 'Verificar Email')

@section('content')
<div class="verify-email-container">
    <div class="mb-4 text-sm text-gray-600">
        ¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-green-600">
        Un nuevo enlace de verificación ha sido enviado a la dirección de correo electrónico que proporcionaste durante el registro.
    </div>
    @endif

    <div class="form-group" style="text-align: center;">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit">Reenviar Email de Verificación</button>
        </form>
    </div>
</div>
@endsection