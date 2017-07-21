<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filerecords extends Model
{
    //
    protected $table = "filerecords";
     protected $fillable = [
	'id', 'titulo','court_id','court','descripcion','involucrados','fecha_inicio','status','location_id','casetype_id'
	];
}
