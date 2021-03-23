<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
protected $fillable = [
        'id','codigo','nombre'];

public function localizar()
    {
        return $this->hasMany(Localizar::class);
    

    }
    }
