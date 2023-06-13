<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCliente');
            $table->unsignedBigInteger('idProduto');
            $table->timestamp('dataCriacao')->default(now());
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->foreign('idProduto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
