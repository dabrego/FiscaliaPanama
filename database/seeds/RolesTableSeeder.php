<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('name', '=', 'Admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'Admin',
	            'slug' => 'admin',
	            'description' => 'Admin Role',
	            'level' => 5,
        	]);
	    }



	    if (Role::where('name', '=', 'Juez')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Juez',
	            'slug' => 'juez',
	            'description' => 'Acceso a sus casos pendientes de resolucion, biblioteca de consulta de casos, opcion de seguimiento de caso, cierre de caso o cambio de estado',
	            'level' => 4,
	        ]);
	    }

	    if (Role::where('name', '=', 'Abogado')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Abogado',
	            'slug' => 'abogado',
	            'description' => 'Acceso a sus casos asignaddos, biblioteca de consulta de casos, opcion de seguimiento de caso',
	            'level' => 3,
	        ]);
	    }

	    if (Role::where('name', '=', 'User')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'User',
	            'slug' => 'user',
	            'description' => 'Se encarga de regisrar los expendientes, asignar los casos a los abogados o juez',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('name', '=', 'Unverified')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Unverified',
	            'slug' => 'unverified',
	            'description' => 'Unverified Role',
	            'level' => 0,
	        ]);
	    }

    }

}