<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportejueces extends Model
{
    //
        protected $table = "reportejueces";
    protected $fillable = [		
'name','cantidad','status'];
}
