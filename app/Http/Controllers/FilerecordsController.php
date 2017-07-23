<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filerecords;
use App\Location;
use App\Court;
use DB;
use Auth;
use Exception;
use RoleUserModel;
use App\Estadistica;

class FilerecordsController extends Controller
{

    private $path='jueces';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Auth::check()){
            $data = Filerecords::all();

            //Enviamos esos registros a la vista.
            return view($this->path.'.dashboard', compact('data'));
        }
        
        return redirect('/login');
    }


    public function showJuecesData()
    {
        
            $data = Filerecords::all();
        //Enviamos esos registros a la vista.

        return view($this->path.'.reportejueces', compact('data'));
    
    }

    public function showProvinData()
    {
        
            $data = Filerecords::all();
        //Enviamos esos registros a la vista.

        return view($this->path.'.reporteprovincia', compact('data'));
    
    }

        public function showEstadisticData()
    {
        
            $data = Estadistica::all();
        //Enviamos esos registros a la vista.

        return view($this->path.'.estadistica', compact('data'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $debug = false;
        //  Getting all users_id's with role_id = 7 (jueces);
        $roles_users = DB::table('role_user')
        ->select('user_id')
        ->where('role_id', '=', '7')
        ->get();

        if (isset($roles_users)){
            // echo '<pre>';
            // print_r($roles_users);
            // echo '</pre>';

            $usuarios_juez = array();
            $juez = array();

            foreach($roles_users as $key => $value){
                // Accessing an object information
                $usuarios_juez = DB::table('users')
                ->select('name', 'email')
                ->where('id', '=', $value->user_id)
                ->get(); 

                // Passing information from object to a std array
                foreach($usuarios_juez as $key => $value){
                    // array_push($juez, $value->name);
                    array_push($juez, ['name'=>$value->name, 'email'=>$value->email]);
                }
            } 
        }
        if($debug == true){
            echo '<pre>';
            print_r($juez);
            echo '</pre>';
        }
        
        $data = Court::all();
        //Enviamos esos registros a la vista.

        return view($this->path.'.expediente', 
            ['data'=>$data, 'juez'=>$juez]);
        // return view ($this->path.'.expediente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         // //Registro de expediente
        try{
            $registro = new Filerecords();

            $registro->titulo = $request->titulo;
            $registro->court_id = $request->court_id;
            $registro->descripcion = $request->descripcion;
            $registro->involucrados = $request->involucrados;
            $registro->fecha_inicio = $request->fecha_inicio;
            $registro->status = $request->status;
            $registro->provinciafk = $request->provinciafk;
            $registro->distritofk = $request->distritofk;
            $registro->corregimientofk = $request->corregimientofk;
            $registro->casetype_id = $request->casetype_id;
            
            $registro->save();
           // return view('jueces.dashboard');
           return redirect('/dashboard');    
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
