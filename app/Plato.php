<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    //
    protected $table = 'plato';
    protected $fillable = ['nombre_plato','precio','descripcion'];
}
