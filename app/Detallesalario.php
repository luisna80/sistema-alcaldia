<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detallesalario extends Model
{
    
    protected $table ="detallesalarios";
    protected $fillable = [
        'id','trabajador_cedula','salarios_id'];
        
}
