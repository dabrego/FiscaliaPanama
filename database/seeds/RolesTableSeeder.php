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
	            'name' => 'Administrador',
	            'slug' => 'admin',
	            'description' => 'Perfil administrativo con control total',
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

	    if (Role::where('name', '=', 'Usuario')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Usuario',
	            'slug' => 'usuario',
	            'description' => 'Se encarga de regisrar los expendientes, asignar los casos a los abogados o juez',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('name', '=', 'Pendiente')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Pendiente',
	            'slug' => 'pendiente',
	            'description' => 'Perfil pendiente o sin verificar',
	            'level' => 0,
	        ]);
	    }

    }

}