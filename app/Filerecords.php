<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Filerecords extends Model
{
    //
    protected $table = "filerecords";
    protected $fillable = [
	'id', 'titulo','court_id','descripcion','involucrados','fecha_inicio','status','provinciafk','distritofk','corregimientofk','casetype_id'
	];


    public static function allFileRecords(){
        /* 
         * @Este metodo llama todos los registros de expedientes en el sistema
         * @Esta pensado para la vista del dashboard de administradores
         */
        
        $data = DB::table('filerecords')
                    ->join('court', 'filerecords.court_id','=','court.id')
                    ->join('casetype', 'filerecords.casetype_id','=','casetype.id')
                     
                     ->select('filerecords.id', 'filerecords.court_id','filerecords.titulo','court.court_name','filerecords.descripcion','filerecords.involucrados',
                     'filerecords.fecha_inicio','filerecords.status','filerecords.provinciafk','filerecords.distritofk','filerecords.corregimientofk','casetype.case_type')
                    ->get();
        return $data;
    }

    public static function allFileRecords_byProfile($param_user_id, $param_role_id){
        /* 
         * @Este metodo llama todos los registros de expedientes en el sistema donde el perfile del abogado activo este registrado en el sistema
         * @Esta pensado para la vista del dashboard de administradores
         */
        
        $data = DB::table('filerecords')
                    ->join('court', 'filerecords.court_id','=','court.id')
                    ->join('casetype', 'filerecords.casetype_id','=','casetype.id')
                    ->join('pivot', 'pivot.filerecord_id', '=', 'filerecords.id' )
                   
                     ->select('filerecords.id', 'filerecords.court_id','filerecords.titulo','court.court_name','filerecords.descripcion','filerecords.involucrados',
                     'filerecords.fecha_inicio','filerecords.status','filerecords.provinciafk','filerecords.distritofk','filerecords.corregimientofk','casetype.case_type')
                    ->where('pivot.user_id', '=', $param_user_id)
                    ->where('pivot.role_id', '=', $param_role_id)
                    ->get();
        return $data;
    }
}
