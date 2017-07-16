<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    //
     protected $table = "court";
     protected $fillable = [
	'id', 'court_name'
	];
}
