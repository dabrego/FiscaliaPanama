<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentariosRegistrosModel extends Model
{
    //
    protected $table = "comentarios_registros";
    protected $fillable = [		
'id','comentarios','filerecord_id','created_at','updated_at'];
}
