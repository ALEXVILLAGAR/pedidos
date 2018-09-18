<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('producto_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad_unidades');
            $table->integer('id_pedido')->unsigned();
            $table->timestamps();
            $table->foreign('id_pedido')->references('id')->on('pedidos');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_pedidos');
        
    }
}
