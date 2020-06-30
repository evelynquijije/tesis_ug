<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model
{
    use SoftDeletes; //Implementamos 

   protected $dates = ['deleted_at'];

   protected $table = 'periodo';

    protected $fillable = [
        'id', 'nombre'
    ];
}
