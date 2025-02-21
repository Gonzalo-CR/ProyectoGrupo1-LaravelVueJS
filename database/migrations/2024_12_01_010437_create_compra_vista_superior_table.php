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
        Schema::create('compra_vista_superior', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno_compra');
            $table->foreign('id_alumno_compra')->references('id')->on('users');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_vista_superior');
    }
};
