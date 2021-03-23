<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {

            $table->string('cedula',12)->primary();
            $table->integer('codigo');
            $table->string('nacionalidad');
            $table->string('pnombre');
            $table->string('papellido');
            $table->string('snombre')->nullable();
            $table->string('sapellido')->nullable();
            $table->string('genero')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('edo_civil')->nullable();
            $table->string('correo_inst')->nullable();
            $table->string('correo_per')->nullable();
            $table->string('estado')->nullable();
            $table->string('municipio')->nullable();
            $table->string('parroquia')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tlf_casa')->nullable();
            $table->string('tlf_personal')->nullable();
            $table->string('tlf_oficina')->nullable();
            
            
           
            $table->string('discapacidad')->nullable();
            $table->string('nivelinstruccion')->nullable();
            
            $table->string('banco')->nullable();
            $table->string('ncuenta')->nullable();
            $table->string('tcamisa')->nullable();
            $table->string('tpantalon')->nullable();
            $table->string('suestado')->nullable();
            $table->string('tcalzado')->nullable();
            $table->date('fecha_ingreso')->nullable();
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
        Schema::dropIfExists('trabajadores');
    }
}
