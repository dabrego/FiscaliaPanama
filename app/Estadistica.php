<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    //
    protected $table = "estadistica";
    protected $fillable = [		
'created_at','status','cantidad','case_type'];
}
