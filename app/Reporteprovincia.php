<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporteprovincia extends Model
{
    //
    protected $table = "reporteprovincia";
    protected $fillable = [		
'provinciafk','distritofk','corregimientofk','case_type','status','cantidad'];
}
