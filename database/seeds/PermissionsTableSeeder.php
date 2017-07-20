<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Add Permissions
	     *
	     */
        /*if (Permission::where('name', '=', 'Can View Users')->first() === null) {
			Permission::create([
			    'name' => 'Can View Users',
			    'slug' => 'view.users',
			    'description' => 'Can view users',
			    'model' => 'Permission',
			]);
        }*/

        if (Permission::where('name', '=', 'Control Total')->first() === null) {
			Permission::create([
			    'name' => 'Control Total',
			    'slug' => 'ver.todo',
			    'description' => 'Control Total',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Registrar Expendientes')->first() === null) {
			Permission::create([
			    'name' => 'Registrar Expendientes',
			    'slug' => 'registrar.expendientes',
			    'description' => 'Registrar Expendientes',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Ver Expendientes')->first() === null) {
			Permission::create([
			    'name' => 'Ver Expendientes',
			    'slug' => 'ver.expendientes',
			    'description' => 'Ver Expendientes',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Editar Expendientes')->first() === null) {
			Permission::create([
			    'name' => 'Editar Expendientes',
			    'slug' => 'editar.expendientes',
			    'description' => 'Editar Expendientes',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Asignar Casos')->first() === null) {
			Permission::create([
			    'name' => 'Asignar Casos',
			    'slug' => 'asignar.casos',
			    'description' => 'Asignar Casos',
			    'model' => 'Permission',
			]);
        }

        /*if (Permission::where('name', '=', 'Can Create Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Create Users',
			    'slug' => 'create.users',
			    'description' => 'Can create new users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Edit Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Edit Users',
			    'slug' => 'edit.users',
			    'description' => 'Can edit users',
			    'model' => 'Permission',
			]);
        }

        if (Permission::where('name', '=', 'Can Delete Users')->first() === null) {
			Permission::create([
			    'name' => 'Can Delete Users',
			    'slug' => 'delete.users',
			    'description' => 'Can delete users',
			    'model' => 'Permission',
			]);
        }*/

    }
}
