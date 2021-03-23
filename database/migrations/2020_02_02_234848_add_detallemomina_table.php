<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetallemominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallenomina', function (Blueprint $table) {
            $table->increments('id');
             $table->string('trabajador_cedula',12);
            $table->foreign('trabajador_cedula')->references('cedula')->on('trabajadores');
               $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')->references('id')->on('cargos');
              $table->string('grupo_codigo',10);
            $table->foreign('grupo_codigo')->references('codigo')->on('grupos');
            $table->string('departamento_codigo',10);
            $table->foreign('departamento_codigo')->references('codigo')->on('departamentos');
            $table->integer('salarios_id')->unsigned();
            $table->foreign('salarios_id')->references('id')->on('salarios');
            $table->integer('nomina_id')->unsigned();
            $table->foreign('nomina_id')->references('id')->on('nomina');
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
        Schema::dropIfExists('detallenomina');
    }
}
