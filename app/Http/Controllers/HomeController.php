<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Filerecords;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        // Get the currently authenticated user...
        $user = Auth::user();

        // Get the currently authenticated user's ID...
        $id = Auth::id();
        // echo '<pre>';
        // print_r($user->email .' id: '.$id);
        // echo '</pre>';
        
        $user = User::where('email', '=', $user->email)->first();
        if ( $user->hasRole('admin') ) { 
        // if ( true ) { // for testing
           
             $userRole = 'admin';
             return view('administradores.dashboard', 
                ['role' => $userRole, 'nombre' => $user->name]);
        }

        if ($user->hasRole('juez')) { // you can pass an id or slug
        // elseif (false) { // for testing
             $userRole = 'juez';
             

              $data = Filerecords::all();
             // return Route::get('jueces/dashboard');
             return view('jueces.dashboard', 
                ['role' => $userRole, 'nombre'=>$user->name, 'data'=>$data]);
        }

        if ($user->hasRole('abogado')) { // you can pass an id or slug
        // if (false) { // for testing
             $userRole = 'abogado';
             return view('abogados.dashboard',  
                ['role' => $userRole, 'nombre' => $user->name]);
        }

        if ($user->hasRole('usuario')) { // you can pass an id or slug
        // if (true) { for testing
            $data = Filerecords::all();
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

        // $task_path = resource_path('views/task.blade.php');
        
        // $task_controller = new Taskcontroller();
        // return $task_controller->index();
        // return Route::get('task');
        
    }
}
