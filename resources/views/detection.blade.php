@extends('layouts.app')

@section('title', 'Detector de Canción')

@section('content')
<div class="detector-container">
    <div class="background"></div>
    <div class="content">
        <h1>Pulsa la imagen para detectar la canción</h1>
        <div class="img-container">
            <img id="detectImage" class="logo-waver" src="{{ asset('media/logo_waver.png') }}" alt="Detect Song">
        </div>
        <div id="spinner" class="spinner"></div>
        <p>Identifica la música que está sonando.</p>
        <form id="songDetectForm" class="song-detect-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="audioFile">Seleccionar archivo de audio:</label>
                <input type="file" id="audioFile" name="audio" accept="audio/*" required>
            </div>
            <button id="uploadAudio" type="submit">Enviar</button>
        </form>
    </div>
    <form style="display:none" method="POST" action="/song" id="form_input">
        @csrf
        <input type="text" name="titulo" id="titulo_input">
        <input type="text" name="artista" id="artista_input">
        <input type="text" name="imagen_album" id="imagen_album_input">
    </form>
    <div class="detected-song-container">


    </div>
</div>

<script>
    document.getElementById('detectImage').addEventListener('click', function() {
        document.getElementById('spinner').style.display = 'block'; // Mostrar el spinner
        setTimeout(function() {
            document.getElementById('songDetectForm').submit();
        }, 5000);
    });
    let form = document.getElementById('songDetectForm')
    form.addEventListener('submit', (ev) => {
        ev.preventDefault()
        let submit = document.getElementById('uploadAudio')
        submit.innerText = 'Cargando...'
        let formData = new FormData(form)

        fetch('https://shazam-api7.p.rapidapi.com/songs/recognize-song', {
                headers: {
                    'x-rapidapi-key': '6ce7fa74d0msh1aa509cb025382ap1253ebjsn8ecd5c196931',
                    'X-rapidapi-host': 'shazam-api7.p.rapidapi.com'
                },
                body: formData,
                method: 'POST'
            }).then((res) => res.json()).then((res) => {
                let title = res.track.title
                let artist = res.track.subtitle
                let image = res.track.images.background
                let laravelForm = document.getElementById("form_input");

                document.getElementById("titulo_input").value = title;
                document.getElementById("artista_input").value = artist;
                document.getElementById("imagen_album_input").value = image;

                laravelForm.submit();
                submit.innerText = 'Enviar'
            })
            .catch(() => {
                alert("Archivo Inválido")
            })
    })
</script>
@endsection