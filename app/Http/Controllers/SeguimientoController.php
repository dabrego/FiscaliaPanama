<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
use App\ComentariosRegistrosModel;


class SeguimientoController extends Controller
{
    private $debug = false;
   
    
    public function __construct(){
        //
    }

    public function index() {   
        // Get the currently authenticated user...
        $user = Auth::user();
        $user = User::where('email', '=', $user->email)->first();
        // Get the current role
        $role = RoleUserModel::get_user_role($user->id);

        # Get the currently authenticated user's ID...
        /*
            echo "<pre>";
            print_r($user->id);
            echo "</pre>";
        */

        # Get the role id for a user
        /*
            echo "<pre>";
            print_r($role[0]->id);
            echo "</pre>";
        */
        $id = Auth::id();
        
        if ( $user->hasRole('admin') ) { 
             $userRole = 'admin';
             $data = Filerecords::allFileRecords();
             return view('administradores.dashboard', 
                ['role'=> $userRole, 'nombre'=>$user->name,'data'=>$data]);
        }

        if ($user->hasRole('juez')) { 
            $userRole = 'juez';
            
            if($debug){
                echo "<pre>";
                print_r($data);
                echo "</pre>";
            }
            
            return view('jueces.dashboard', 
                ['role' => $userRole, 'nombre'=>$user->name, 'data'=>$data]);
        }

        if ($user->hasRole('abogado')) { 
            /*
             * @Abogado de Oficio: Debe tener acceso a sus casos asignados y 
             * @a la biblioteca de consulta de casos, opción de 
             * @seguimiento de caso.
             */
            
            $data = Filerecords::allFileRecords_byProfile($user->id, $role[0]->role_id);
            $userRole = 'abogado';
            return view('abogados.seguimientos',  
                ['role' => $userRole, 'nombre' => $user->name, 'data'=>$data]);
        }

        if ($user->hasRole('usuario')) { 
            $data = Filerecords::allFileRecords();

            $userRole = 'usuario';
            return view('usuarios.dashboard',  
            ['role'=> $userRole, 'nombre'=>$user->name,'data'=>$data]);
        }

        if ( !(Auth::guest()) ){
            $userRole = 'pendiente';
            return view('invitados.dashboard',
                ['role' => $userRole, 'nombre' => $user->name]);
        }

        else {
            return view('welcome');
        }
    }





public static function showComments ()
//Se toma el id del registro y se envia a la siguiente vista donde se mostrará la información y los comentarios
    {
            $data = ComentariosRegistrosModel::all();
       return view('abogados.comments', compact('data'));
    }



 public function store(Request $request)
    {

       try{
            
            $registro = new ComentariosRegistrosModel();
            //var_dump($request);
            $registro->filerecord_id = $request->filerecord_id;
            $registro->comentarios = $request->comentarios;
            $registro->save();

           return redirect('/dashboard');    
        }
        catch(Exception $e){

            return "Fatal error = ".$e->getMessage();
        }
    }






    public function comentarSeguimiento(){
        // Get the currently authenticated user...
        $user = Auth::user();
        $user = User::where('email', '=', $user->email)->first();
        // Get the current role
        $role = RoleUserModel::get_user_role($user->id);

        
        if ($user->hasRole('abogado')) { 
            /*
             * @Abogado de Oficio: Debe tener acceso a sus casos asignados y 
             * @a la biblioteca de consulta de casos, opción de 
             * @seguimiento de caso.
             */
            $data = Filerecords::allFileRecords_byProfile($user->id, $role[0]->role_id);
            $userRole = 'abogado';
            return view('abogados.seguimientos',  
                ['role' => $userRole, 'nombre' => $user->name, 'data'=>$data]);
        } else{

        }
    }
}
