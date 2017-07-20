<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        // $id = Auth::id();
        // echo '<pre>';
        // // print_r($user->email .' id: '.$id);
        // echo '</pre>';
        
        // $user = User::where('email', '=', $user->email)->first();
        // if ( $user->hasRole('admin') ) { 
        if ( false ) { 
             $userRole = 'admin';
             return view('administradores.dashboard', ['role' => $userRole]);
        }

        // if ($user->hasRole('juez')) { // you can pass an id or slug
        elseif (false) { // you can pass an id or slug
             $userRole = 'juez';
             return view('jueces.dashboard', ['role' => $userRole]);
        }

        // elseif ($user->hasRole('usuario')) { // you can pass an id or slug
        elseif (true) {
             $userRole = 'usuario';
             return view('usuarios.dashboard', ['role' => $userRole]);
        }

         else {
            return view('/welcome');
        }

        // $task_path = resource_path('views/task.blade.php');
        
        // $task_controller = new Taskcontroller();
        // return $task_controller->index();
        // return Route::get('task');
        
    }
}
