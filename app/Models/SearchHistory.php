<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchHistory extends Model
{
    use HasFactory;
    protected $table = 'historial'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'usuario_idUsuario',
        // Aquí puedes agregar otros campos llenables si es necesario
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_idUsuario', 'id');
    }
}
