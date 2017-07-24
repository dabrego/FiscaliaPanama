<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filerecords extends Model
{
    //
    protected $table = "filerecords";
      protected $fillable = [
	'id', 'titulo','court_id','descripcion','involucrados','fecha_inicio','status','provinciafk','distritofk','corregimientofk','casetype_id','juez','abogados'
	];
}
