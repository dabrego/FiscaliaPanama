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
use App\reportejueces;

class AbogadoController extends Controller
{
    private $path='abogados';
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

            return view($this->path.'.seguimiento', compact('data'));
        }
        
        return redirect('/login');
    }
 public function showJuecesData()
    {
        
        $data = reportejueces::all();
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
