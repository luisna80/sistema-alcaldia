<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetallenomina2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallenomina2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detallenomina_id')->unsigned();
            $table->foreign('detallenomina_id')->references('id')->on('detallenomina');
            $table->double('monto');
            $table->string('tipo');//tipo:asig-deducion
            $table->string('nombre');//nombre
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
        Schema::dropIfExists('detallenomina2');
    }
}
