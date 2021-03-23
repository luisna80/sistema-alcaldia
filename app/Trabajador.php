<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
	protected $table ="trabajadores";
      protected $fillable = ['nacionalidad','cedula', 'pnombre','papellido','genero','fecha_nac','tlf_casa','tlf_personal','direccion','edo_civil','estado','municipio','parroquia','discapacidad','nivel','correo','banco','ncuenta','tcamisa','tpantalom','tcalzado','suestado'];



      public function localizar()
    {
        return $this->hasMany(Localizar::class);
    

    }
    public  function scopeBuscar($query,$cedula){

	return $query->where('cedula', 'LIKE',"%$cedula%"   );


    }
}
