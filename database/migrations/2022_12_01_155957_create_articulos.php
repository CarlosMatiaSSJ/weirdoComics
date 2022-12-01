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
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('idArticulo');
            $table->string('tipoArticulo');            
            $table->string('marcaArticulo');
            $table->string('descripcionArticulo');
            $table->string('cantidadArticulo');
            $table->string('precioVentaArticulo');
            $table->string('precioCompraArticulo');
            $table->string('fechaIngresoArticulo');
            $table->string('idProveedor_detalleArticulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
};
