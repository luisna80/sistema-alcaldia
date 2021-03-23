<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
	protected $table ="nomina";
	protected $fillable = [
        'id','FECHA_INI' ,'FECHA_FIN','QUINCENA',
            'FECHA_ELA'];
            public function localizar()
    {
        return $this->hasMany(Localizar::class);
    

    }

    public  function scopeBuscar($query,$codigo){

	return $query->where('grupo_codigo', 'LIKE',"%$codigo%");


    }
}
