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
        Schema::create('detalle_de_pedido', function (Blueprint $table) {
            $table->unsignedBigInteger('producto_idProducto');
            $table->unsignedBigInteger('pedido_idPedido');
            $table->unsignedBigInteger('pedido_Usuario_idUsuario');

            $table->foreign('producto_idProducto')->references('id')->on('producto')->onDelete('cascade');
            $table->foreign('pedido_idPedido')->references('id')->on('pedido')->onDelete('cascade');
            $table->foreign('pedido_Usuario_idUsuario')->references('id')->on('users')->onDelete('cascade');

            $table->primary([
                'producto_idProducto', 'pedido_idPedido',
                'pedido_Usuario_idUsuario'
            ]);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_de_pedido');
    }
};
