<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//---------------------------------------------------------------
//EXPEDIENTE
//---------------------------------------------------------------
Route::resource('fiscalias', 'FilerecordsController');
//Route::get('/ubicacion','FilerecordsController@create');

Route::get('/dashboard','FilerecordsController@index');
Route::get('/expediente','FilerecordsController@create');
//---------------------------------------------------------------
//REPORTES
//---------------------------------------------------------------
//Route::get('/reportejuez','FilerecordsController@showJuecesData');
//Route::get('/reporteprovincia','FilerecordsController@showProvinData');
Route::get('/estadistica3','FilerecordsController@showEstadisticData');



//--------------------------------------------------

// Route::resource('task', 'TaskController');
// Route::resource('task', 'TaskController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/task', 'TaskController@index');

//--------------------------------------------------
//---------------------------------------------------------------
//ADMINISTRADORES
//---------------------------------------------------------------
//---------------------------------------------------------------
//ADMIN - EXPEDIENTE
//---------------------------------------------------------------
Route::resource('administrar', 'AdministradorController');
//Route::get('/ubicacion','FilerecordsController@create');

Route::get('/dashboard','AdministradorController@index');
Route::get('/expediente1','AdministradorController@create');
//---------------------------------------------------------------
//ADMIN - REPORTES
//---------------------------------------------------------------
Route::get('/reportejuez','AdministradorController@showJuecesData');
Route::get('/reporteprovincia','AdministradorController@showProvinData');
Route::get('/estadistica','AdministradorController@showEstadisticData');
//----------------------------------------------------------------------
//CREACION DE USUARIOS POR ADMINISTRADOR---------------------------
//--------------------------------------------------
Route::resource('registrar', 'UserRegisterController');
Route::get('/showregistro','UserRegisterController@index');
Route::get('/createregistro','UserRegisterController@create');
//--------------------------------------------------
//---------------------------------------------------------------
//LOCATION
//---------------------------------------------------------------
Route::resource('locaciones', 'LocationController');
Route::get('/ubicacion','LocationController@create');
Route::get('/showubicacion','LocationController@index');
//--------------------------------------------------
//---------------------------------------------------------------
//COURT
//---------------------------------------------------------------
Route::resource('juzgados', 'CourtController');
Route::get('/court','CourtController@create');
Route::get('/showcourt','CourtController@index');
Route::get('/showdata','CourtController@showFormData');





//---------------------------------------------------------------
//ABOGADOS Y JUECEZ
//---------------------------------------------------------------
//---------------------------------------------------------------
//EXPEDIENTE
//---------------------------------------------------------------
Route::resource('abogar', 'AbogadoController');
//Route::get('/ubicacion','FilerecordsController@create');

Route::get('/expediente2','AbogadoController@create');
//---------------------------------------------------------------
//REPORTES 
//---------------------------------------------------------------
Route::get('/reportejuez1','AbogadoController@showJuecesData');
Route::get('/reporteprovincia1','AbogadoController@showProvinData');
Route::get('/estadistica1','AbogadoController@showEstadisticData');

//CONTROLADOR SEGUIMIENTO ruteara a cada perfil a su respectivo dashboard
Route::get('/seguimientos','SeguimientoController@index');
Route::get('/seguimientos/comentario','SeguimientoController@comentarSeguimiento');

//mostrará la vista de comentarios enviando id de filerecords para mostrar los comentarios y el caso que seleccionó
Route::get('/comments/{id}','SeguimientoController@showComments'); 

Route::get('/seguimientoscomentario','SeguimientoController@store'); 
