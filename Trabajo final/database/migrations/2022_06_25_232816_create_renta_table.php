<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renta', function (Blueprint $table) {
            $table->id('renta_id');
            $table->string('fecha_registro');
            $table->string('fecha_devolucion');
            $table->string('fecha_entrega');
            $table->unsignedBigInteger('pelicula_id')->unsigned();
            $table->foreign('pelicula_id')->references('pelicula_id')->on('pelicula');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renta');
    }
};
