<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salario extends Model
{
    protected $table ="salarios";
    protected $fillable = [
        'id','grupos','niveles','sueldos'];



      public function localizar()
    {
        return $this->hasMany(Localizar::class);
    

    }
}
