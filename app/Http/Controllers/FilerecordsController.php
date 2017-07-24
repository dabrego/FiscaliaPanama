<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filerecords;
use App\Location;
use App\Casetype;
use App\Court;
use DB;
use Auth;
use Exception;

class FilerecordsController extends Controller
{

    
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

            return view('usuarios.dashboard', compact('data'));
    }
    return redirect('/login');
    

    }


    public function showJuecesData()
    {
        
            $data = Filerecords::all();
        //Enviamos esos registros a la vista.

        return view('usuarios.reportejueces', compact('data'));
    
    }

    public function showProvinData()
    {
        
            $data = Filerecords::all();
        //Enviamos esos registros a la vista.

        return view('usuarios.reporteprovincia', compact('data'));
    
    }

        public function showEstadisticData()
    {
        
            $data = Filerecords::all();
        //Enviamos esos registros a la vista.

        return view('usuarios.estadistica', compact('data'));
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
             $data_court = Court::all();
             $data_location = Location::all();
			 $data_casetype = Casetype::all();
			 $jueces = DB::table('users')
			             ->join('role_user','user_id','=','users.id')
						 ->select('name')
						 ->where('role_id','=',7)
						 ->get();
			 $abogados = DB::table('users')
			             ->join('role_user','user_id','=','users.id')
						 ->select('name')
						 ->where('role_id','=',8)
						 ->get();
			//dd($abogados);
        //Enviamos esos registros a la vista.

        return view('usuarios.expediente', compact('data_court','data_location','data_casetype', 'jueces','abogados'));
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
			$registro->juez = $request->juez;
			$registro->abogados = $request->abogados;
            
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
