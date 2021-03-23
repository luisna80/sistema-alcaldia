<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = [
        'codigo','cargo',  'sueldo'];




public function localizar()
    {
        return $this->hasMany(Localizar::class);
    
}
//para la busqueda en cargos
public  function scopeBuscar($query,$cargo){

	return $query->where('cargo', 'LIKE',"%$cargo%");


    }
}
