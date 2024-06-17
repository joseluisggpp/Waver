<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', Session::get('perPage', 5)); // Obtener el valor de elementos por página del request o de la sesión
        Session::put('perPage', $perPage); // Guardar el valor en la sesión

        $songs = Song::paginate($perPage); // Obtener canciones paginadas según la selección del usuario

        return view('top10songs', compact('songs', 'perPage'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $song = $request->validate([
            'titulo' => ['required', 'string'],
            'artista' => ['required', 'string'],
            'imagen_album' => ['required', 'string'],

        ]);

        $song = Song::create($song);
        $product = Producto::create([

            'nombreProducto' => $song->titulo,
            'tipoProducto' => 'Cancion',
            'precio' => '4.99',
            'artista' => $song->artista,
            'album' => $song->album,
            'cancion_idCancion' => $song->id

        ]);
        return redirect('/songs/' . $song->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        $song = Song::findOrFail($song->id);
        return view('show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
