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
        Schema::create('huella_digital', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cancion_idCancion');
            $table->foreign('cancion_idCancion')->references('id')->on('song')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huella_digital');
    }
};
