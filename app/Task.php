<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{	
	// Model Table
    protected $table = 'tasks';

    // Mass Assignable
    protected $fillable = ['name'];

    // Attributes excluded from the model json form
    protected $hidden = [];
}
