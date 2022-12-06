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
        Schema::create('productos_pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger("id_pedido");
            $table->foreign("id_pedido")
            ->references("id")
            ->on("pedidos")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->string("descripcion");
            $table->decimal("precio", 9, 2);
            $table->decimal("cantidad", 9, 2);
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
        Schema::dropIfExists('productos_pedidos');
    }
};
