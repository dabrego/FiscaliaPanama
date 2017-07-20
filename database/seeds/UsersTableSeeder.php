<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $adminRole 			= Role::where('name', '=', 'Admin')->first();
        $juezRole 			= Role::where('name', '=', 'Juez')->first();
        $abogadoRole 		= Role::where('name', '=', 'Abogado')->first();
        $userRole 			= Role::where('name', '=', 'Usuario')->first();
        $pendienteRole 		= Role::where('name', '=', 'Pendiente')->first();


		$permissions 		= Permission::all();

		$controlTotal 		= Permission::where('id', '=', '5')->first();
		$registrar			= Permission::where('id', '=', '6')->first();
		$ver				= Permission::where('id', '=', '7')->first();
		$editar				= Permission::where('id', '=', '8')->first();
		$asignar			= Permission::where('id', '=', '9')->first();

	    /**
	     * Add Users
	     */
        if ($newUser = User::where('email', '=', 'admin@admin.com')->first() ) {

	        /*$newUser = User::create([
	            'name' => 'Admin',
	            'email' => 'admin@admin.com',
	            'password' => bcrypt('password'),
	        ]);*/

	        $newUser->attachRole($adminRole);
			/*foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}*/

        }

        /*if (User::where('email', '=', 'user@user.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'User',
	            'email' => 'user@user.com',
	            'password' => bcrypt('password'),
	        ]);

	        $newUser;
	        $newUser->attachRole($userRole);

        }*/
        if ($newUser = User::where('email', '=', 'dabrego@gmail.com')->first() ) {
	        
	        // $newUser = User::create([
	        //     'name' => 'dabrego',
	        //     'email' => 'dabrego@gmail.com',
	        //     'password' => bcrypt('1'),
	        // ]);
        	$newUser->attachRole($adminRole);
			// foreach ($permissions as $permission) {
			// 	$newUser->attachPermission($permission);
			// }
			$newUser->attachPermission($adminRole);
        }
  //       if (User::where('email', '=', 'juez@gmail.com')->first() === null) {
	        
	 //        $newUser = User::create([
	 //            'name' => 'juez',
	 //            'email' => 'juez@gmail.com',
	 //            'password' => bcrypt('1'),
	 //        ]);
  //       	$newUser->attachRole($juezRole);
		// 	$newUser->attachPermission($ver);
		// 	$newUser->attachPermission($editar);
  //       }
        
		// if (User::where('email', '=', 'abogado@gmail.com')->first() === null) {

	 //        $newUser = User::create([
	 //            'name' => 'abogado',
	 //            'email' => 'abogado@gmail.com',
	 //            'password' => bcrypt('1'),
	 //        ]);
  //       	$newUser->attachRole($abogadoRole );
		// 	$newUser->attachPermission($ver);
			
  //       }

        if ( $newUser = User::where('email', '=', 'user@gmail.com')->first() ) {
	        
	       /* $newUser = User::create([
	            'name' => 'user',
	            'email' => 'user@gmail.com',
	            'password' => bcrypt('1'),
	        ]);*/
        	$newUser->attachRole($userRole  );
			/*foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}*/
        }
    }
}