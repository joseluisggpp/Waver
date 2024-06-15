@extends('layouts.app')

@section('title', 'Top 10 Canciones')

@section('content')

<div class="table-container">
    <h2>Todas las Canciones</h2>

    <!-- Iterar sobre las canciones aquí -->
    @foreach ($songs as $cancion)
    <a href="{{ route('show', $cancion->id) }}" class="card text-decoration-none mb-3"> {{-- Agregué un enlace al detalle de la canción --}}

        <div class="song-container">
            <div class="song-details">
                <div class="song-number">{{ $loop->iteration }}</div>
                <div class="song-thumbnail">
                    <img src="{{ asset($cancion->imagen_album) }}" alt="Imagen del álbum">
                </div>
                <div class="song-info">
                    <h3>{{ $cancion->titulo }}</h3>
                    <p>{{ $cancion->artista }}</p>
                </div>
            </div>
        </div>

    </a>
    @endforeach

</div>

@stop