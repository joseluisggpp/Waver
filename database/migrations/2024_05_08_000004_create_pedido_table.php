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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->foreign('usuarios_idUsuario')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('fechaPedido');
            $table->decimal('total');
            $table->string('estado');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
