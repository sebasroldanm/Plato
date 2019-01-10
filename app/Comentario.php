<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $table = 'comentario';
    protected $fillable = ['comentario','comable_id','comable_type'];
}
