<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNominaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomina', function (Blueprint $table) {
            $table->increments('id');
            $table->date('FECHA_INI'); 
            $table->date('FECHA_FIN'); 
            $table->string('QUINCENA');
            $table->date('FECHA_ELA'); 
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
        Schema::dropIfExists('nomina');
    }
}
