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
        Schema::create('comics', function (Blueprint $table) {
            $table->increments('idComic');
            $table->string('nombreComic');            
            $table->string('edicionComic');
            $table->string('compañiaComic');
            $table->string('cantidadComic');
            $table->string('precioVentaComic');
            $table->string('precioCompraComic');
            $table->string('fechaIngresoComic');
            $table->string('idProveedor_detalle');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
};
