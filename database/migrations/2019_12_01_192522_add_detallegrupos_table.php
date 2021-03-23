<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetallegruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallegrupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trabajador_cedula',12);
            $table->foreign('trabajador_cedula')->references('cedula')->on('trabajadores');

            $table->string('grupo_codigo',10);
            $table->foreign('grupo_codigo')->references('codigo')->on('grupos');
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
        Schema::dropIfExists('detallegrupos');
    }
}
