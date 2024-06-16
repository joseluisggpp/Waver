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
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->date('fechaPago');
            $table->string('estadoPago');
            $table->string('metodoPago');
            $table->decimal('monto');
            $table->unsignedBigInteger('pedido_idPedido');
            $table->foreign('pedido_idPedido')->references('id')->on('pedidos')->onDelete('cascade');
            $table->unsignedBigInteger('pedido_Usuario_idUsuario');
            $table->foreign('pedido_Usuario_idUsuario')->references('usuarios_idUsuario')->on('pedidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
