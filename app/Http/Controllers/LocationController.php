<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filerecords;
use App\Location;

class LocationController extends Controller
{
    private $path='jueces';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $data = Location::all();
        //Enviamos esos registros a la vista.

        return view($this->path.'.showlocation', compact('data'));
    
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ($this->path.'.createlocation');
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
        try{
            $registro = new Location();

            $registro->provincia = $request->provincia;
            $registro->distrito = $request->distrito;
            $registro->corregimiento = $request->corregimiento;
            
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
