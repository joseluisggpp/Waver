<!-- resources/views/songs/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalles de la Canción')

@section('content')
<div class="container">
    <div class="song-show-container">
        <div class="song-image-album-container">
            <img src="{{ asset($song->imagen_album) }}" class="img-fluid" alt="Imagen del álbum">
        </div>

        <div class="song-data-container">
            <h1>{{ $song->titulo }}</h1>
            <p>Artista: {{ $song->artista }}</p>
            @if (isset($song->album))
            <p>Álbum: {{ $song->album }}</p>
            @endif
            @if (isset($song->duracion))
            <p>Duración: {{ $song->duracion }} segundos</p>
            @endif
            @if (isset($song->archivo_mp3))
            <audio controls>
                <source src="{{ asset($song->archivo_mp3) }}" type="audio/mpeg">
                Tu navegador no soporta el elemento de audio.
            </audio>
            @endif

            <!-- Formulario para añadir al carrito -->
            <form action="{{ route('cart.add', $song->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary mt-3">Añadir al Carrito</button>
            </form>
        </div>


    </div>
</div>
@endsection