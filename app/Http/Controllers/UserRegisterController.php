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

//-----------------------------------------------------------------------
//---------------------REGISTRO DE USUARIOS-----------------------------
//-----------------------------------------------------------------------
   
 


class UserRegisterController extends Controller
{
    use RegistersUsers;

    
    private $path='administradores';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = DB::table('users')
                    ->join('roles', 'users.role_id','=','roles.id')
                     
                     ->select('users.id', 'users.name','users.email','users.created_at','roles.slug')

                    ->get();

    

        return view($this->path.'.showregistro', compact('data'));
    }


 
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        //
         try{
            $registro = new User();

            $registro->name = $request->name;
            $registro->email = $request->email;
            $registro->password = $request->password = bcrypt('password');
            $registro->role_id = $request->role_id; 
            
            $registro->save();
     
           // return view('jueces.dashboard');
           return redirect('/showregistro');    
        }
        catch(Exception $e){

            return "Fatal error = ".$e->getMessage();
        }
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
}
