<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ComentariosRegistrosModel extends Model
{
    //
    protected $table = "comentarios_registros";
    protected $fillable = [		
						'id', 'comentarios','filerecord_id', 'user_id', 'created_at','updated_at'];


	public static function get_comentarios_registro($id){
		$data = DB::table('comentarios_registros')
		->where('filerecord_id', '=', $id)
		->select('comentarios', 'comentarios_registros.user_id', 'created_at')
		->get();

		return $data;
	}

}
