<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalledepart extends Model
{
	protected $table ="detalledepartamento";
    protected $fillable = [
        'id','trabajador_cedula','departamento_codigo']; //
}
