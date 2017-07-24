<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotRoleUserFilerecord_Model extends Model
{
    protected $table = "pivot";
    protected $fillable = ["role_id", "user_id", "filerecord_id" ];
}
