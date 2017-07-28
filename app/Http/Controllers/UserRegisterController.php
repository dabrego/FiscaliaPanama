<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 //-------------------------------------------
 //REGISTRAR USUARIOS
 //-------------------------------------------
 //REGISTRAR USUARIOS
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

use jeremykenedy\LaravelRoles\Models\Role;
use Illuminate\Database\Eloquent\Model;
//-------------------------------------------------

use App\Filerecords;
use App\User;
use DB;
use Auth;
use Exception;
use App\Reporteprovincia;
use App\Rol;
use App\Http\Controllers\Auth\RegisterController;


//-----------------------------------------------------------------------
//---------------------REGISTRO DE USUARIOS-----------------------------
//-----------------------------------------------------------------------
   
class UserRegisterController extends Controller
{
    use RegistersUsers;

    
    private $path='administradores';
    private $debug = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = User::listando_usuarios_registrados_roles();
            if($this->debug){
                echo '<pre>';
                print_r($data);
                echo '</pre>';
                exit();
            }
        return view($this->path.'.showregistro', compact('data'));
    }


 
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Envia rolles de la base de datos a la vista menu desplegable
        $data = Rol::all();
        return view ($this->path.'.register', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:1|confirmed',
             'role_id' => 'required|integer|max:2',
        ]);
    }


    public function store(Request $request)
    {

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
 
        $role = Role::where('name', '=', $request->role_name)->first();
        $newUser->attachRole($role);

        $data = User::listando_usuarios_registrados_roles();
        return view($this->path.'.showregistro', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usuarios_pendientes()
    {
        // Llama una lista de usuarios con role pendiente
        
    }
}
