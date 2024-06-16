@extends('layouts.app')

@section('title', 'Todas las Canciones')

@section('content')

<div class="table-container">
    <h2>Todas las Canciones</h2>

    <!-- Selector de cantidad de elementos por página -->
    <form id="perPageForm" action="{{ route('top10songs') }}" method="GET" class="mb-3">
        @csrf
        <label for="perPage">Mostrar por página:</label>
        <select name="perPage" id="perPage" onchange="document.getElementById('perPageForm').submit()">
            <option value="1" {{ $perPage == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $perPage == 2 ? 'selected' : '' }}>2</option>
            <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
        </select>
    </form>

    <!-- Iterar sobre las canciones aquí -->
    @foreach ($songs as $cancion)
    <a href="{{ route('show', $cancion->id) }}" class="card text-decoration-none mb-3">
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

    <!-- Mostrar la paginación -->
    {{ $songs->links() }}

</div>

@stop

@section('scripts')
<script>
    // Opcional: JavaScript para manejar el cambio de perPage
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('perPage').addEventListener('change', function() {
            document.getElementById('perPageForm').submit();
        });
    });
</script>
@endsection