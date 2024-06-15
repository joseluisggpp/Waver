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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto');
            $table->string('tipoProducto');
            $table->decimal('precio');
            $table->string('artista')->nullable();
            $table->string('album')->nullable();
            $table->unsignedBigInteger('cancion_idCancion');
            $table->foreign('cancion_idCancion')->references('id')->on('song')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('carrito', function (Blueprint $table) {
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->unsignedBigInteger('producto_idProducto');
            $table->foreign('producto_idProducto')->references('id')->on('producto')->onDelete('cascade');
            $table->foreign('usuarios_idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->integer('cantidad')->default(1);
            $table->primary(['producto_idProducto', 'usuarios_idUsuario']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
        Schema::dropIfExists('carrito');
    }
};
