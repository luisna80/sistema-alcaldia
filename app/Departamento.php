<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
protected $fillable = [
        'id','nombre'];


public function localizar()
    {
        return $this->hasMany(Localizar::class);
    

    }
}
