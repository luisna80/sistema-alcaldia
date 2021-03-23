<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleAsigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleasig', function (Blueprint $table) {
            $table->increments('id');
            $table->string('trabajador_cedula',12);
            $table->foreign('trabajador_cedula')->references('cedula')->on('trabajadores');
            $table->integer('detalle_asig_id')->unsigned();
            $table->foreign('detalle_asig_id')->references('id')->on('asignaciones');
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
        Schema::dropIfExists('detalleasig');
    }
}
