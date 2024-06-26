<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('song', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('artista');
            $table->string('album')->nullable();
            $table->integer('duracion')->nullable();
            $table->string('imagen_album')->nullable(); // Nuevo campo para la imagen del álbum
            $table->string('archivo_mp3')->nullable(); // Nuevo campo para el archivo MP3 de la canción

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song');
    }
};
