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
        Schema::create('resena', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_idUsuario');
            $table->foreign('usuario_idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('producto_idProducto');
            $table->foreign('producto_idProducto')->references('id')->on('producto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resena');
    }
};
