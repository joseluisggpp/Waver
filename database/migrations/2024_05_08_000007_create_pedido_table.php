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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_idUsuario');
            $table->foreign('usuarios_idUsuario')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('fechaPedido');
            $table->decimal('total');
            $table->string('estado');
            $table->timestamps();
        });

        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedInteger('cantidad')->default(1);
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('pedido_id')->references('id')->on('pedidos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('producto_id')->references('id')->on('producto')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_producto');
        Schema::dropIfExists('pedidos');
    }
};
