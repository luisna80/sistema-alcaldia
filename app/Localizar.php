<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizar extends Model
{
protected $fillable = [
        'id','trabajador_cedula','grupo_codigo','departamento_id','cargo_id','salarios_id'];


public function cargo()
    {
      return $this->belongsTo(Cargo::class); // 
    

    }
public function departamento()
    {
      return $this->belongsTo(Departamento::class); // 
    

    }
    public function grupo()
    {
      return $this->belongsTo(Grupo::class); // 
    

    }
    public function trabajador()
    {
      return $this->belongsTo(Trabajador::class); // 
    

    }
    public function salarios()
    {
      return $this->belongsTo(Salario::class); // 
    

    }

        public function nomina()
    {
      return $this->belongsTo(Nomina::class); // 
    

    }
}
