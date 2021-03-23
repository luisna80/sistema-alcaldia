<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleSalariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesalarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salarios_id')->unsigned();
            $table->foreign('salarios_id')->references('id')->on('salarios');
            $table->string('trabajador_cedula',12);
            $table->foreign('trabajador_cedula')->references('cedula')->on('trabajadores');
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
        Schema::dropIfExists('detallesalarios');
    }
}
