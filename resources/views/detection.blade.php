@extends('layouts.app')

@section('title', 'Detector de Canción')

@section('content')

<div class="detector-container">
    <div class="background"></div>
    <div class="content">
        <h1>Pulsa la imagen para detectar la canción</h1>
        <div class="img-container">
            <img class="logo-waver" src="{{ asset('media/logo_waver.png') }}">
        </div>
        <p>Identifica la música que está sonando.</p>
        <form class="song-detect-form">
            <div class="form-group">
                <label for="audioFile">Seleccionar archivo de audio:</label>
                <input type="file" id="audioFile" name="audioFile" accept="audio/*" required>
            </div>
            <button type="submit">Detectar Canción</button>
        </form>
    </div>
</div>

@stop