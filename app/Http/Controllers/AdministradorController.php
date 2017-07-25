<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filerecords;
use App\User;
use App\Casetype;
use App\PivotRoleUserFilerecord_Model;
use App\Estadistica;
use App\Location;
use App\Court;
use DB;
use Auth;
use Exception;
use App\Reporteprovincia;

class AdministradorController extends Controller
{
     private $path='administradores';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        
        if (Auth::check()){
             $data = DB::table('filerecords')
                    ->join('court', 'filerecords.court_id','=','court.id')
                    ->join('casetype', 'filerecords.casetype_id','=','casetype.id')
                     ->select('filerecords.id', 'filerecords.court_id','filerecords.titulo','court.court_name','filerecords.descripcion','filerecords.involucrados',
                     'filerecords.fecha_inicio','filerecords.status','filerecords.provinciafk','filerecords.distritofk','filerecords.corregimientofk','casetype.case_type')

                    ->get();

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
        
            $data = Reporteprovincia::all();
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
        //
        // Get the currently authenticated user...
            $user = Auth::user();
            $user = User::where('email', '=', $user->email)->first();
            $nombre = $user->name;
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

        return view($this->path.'.expediente', compact('data_court','data_location','data_casetype', 'jueces','abogados', 'nombre', 'user'));
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
        //
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
