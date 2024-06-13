@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="carousel-container">
    <div class="owl-carousel">
        <div><img src="{{ asset('media/techno-party-lifestyle.jpg') }}" alt="Image 1"></div>
        <div><img src="{{ asset('media/close-up-recording-video-with-smartphone-concert-toned-picture.jpg') }}" alt="Image 2"></div>
        <div><img src="{{ asset('media/man-plays-acoustic-guitar-closeup.jpg') }}" alt="Image 3"></div>
    </div>
</div>
<div class="cta-to-detection">
    <div class="cta-text-column">
        <h2>¡Descubre qué está sonando ahora mismo!</h2>
        <h3>No pierdas la oportunidad de escuchar ese <strong>temazo</strong> siempre que quieras.</h3>
        <a href="{{ route('detection') }}" class="href"><button>Haz clic aquí</button></a>
    </div>
    <div class="cta-image-column">
        <img src="{{ asset('media/lifeisawave.jpg') }}" class="wave-img">
    </div>
</div>
@stop