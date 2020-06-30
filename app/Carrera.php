<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carrera extends Model
{
     use SoftDeletes; //Implementamos 

   protected $dates = ['deleted_at'];

   protected $table = 'carrera';

    protected $fillable = [
        'id', 'nombre','siglas'
    ];
}
