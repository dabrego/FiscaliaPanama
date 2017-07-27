<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

use App\Filerecords;
use App\User;
use App\Casetype;
use App\PivotRoleUserFilerecord_Model;
use App\Estadistica;
use App\Location;
use App\Court;
use App\RoleUserModel;
use DB;
use Exception;
use Reporteprovincia;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function listando_usuarios_pendientes(){
                    $data = DB::table('users')
                    ->join('role_user', 'role_user.user_id','=','users.id')
                    ->join('roles', 'roles.id','=','role_user.role_id')
                    ->select('users.id','users.email','users.name','roles.id','roles.name','roles.slug','roles.description')
                    ->where('roles.id', '=', '10') 
                    ->get();
            return $data;
    }

    public static function listando_usuarios_registrados_roles(){
                    $data = DB::table('users')
                    ->join('role_user', 'role_user.user_id','=','users.id')
                    ->join('roles', 'roles.id','=','role_user.role_id')
                    ->select('users.id','users.email','users.name','roles.id','roles.name','roles.slug','roles.description','users.created_at', 'users.updated_at')
                    // ->where('roles.id', '=', '10') 
                    ->get();
            return $data;
    }
}   
