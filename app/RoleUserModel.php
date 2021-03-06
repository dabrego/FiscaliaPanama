<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class RoleUserModel extends Model
{	

	 protected $table = "role_user";
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
                    'id',      	
					'name',
					'slug',
					'description',
					'level' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public static function get_user_role($user_id){
    	$role = DB::table('role_user')
    			->where('role_user.user_id', '=', $user_id)
    			->select('role_user.role_id')
    			->get();

		return $role;
    }
}
