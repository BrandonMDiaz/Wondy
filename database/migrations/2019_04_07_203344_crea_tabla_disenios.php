<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaDisenios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disenios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('disenio');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('producto_id');
            $table->integer('imageable_id');
            $table->string('imageable_type');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos');

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
        Schema::dropIfExists('disenios');
    }
}
