<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('nombre');
            $table->increments('id');
            $table->string('imagen');
            $table->tinyinteger('tipo');//manga larga, normal sueter, sudadera, playera
            $table->float('precio');
            $table->char('talla');
            $table->float('calificacion');
            $table->string('nombre');
            $table->string('color');
            $table->unsignedInteger('num_ventas');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('likes', function (Blueprint $table) {
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('producto_id');

          $table->foreign('user_id')
              ->references('id')
              ->on('users');
          $table->foreign('producto_id')
              ->references('id')
              ->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
        Schema::dropIfExists('likes');

    }
}
