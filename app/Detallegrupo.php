<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallegrupo extends Model
{
   protected $fillable = [
        'id','trabajador_cedula','grupo_codigo']; //
}
