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
Route::get('/reportejuez','FilerecordsController@showJuecesData');
//Route::get('/reporteprovincia','FilerecordsController@showProvinData');
Route::get('/estadistica','FilerecordsController@showEstadisticData');

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
//EXPEDIENTE
//---------------------------------------------------------------
Route::resource('administrar', 'AdministradorController');
//Route::get('/ubicacion','FilerecordsController@create');

Route::get('/dashboard','AdministradorController@index');
Route::get('/expediente1','AdministradorController@create');
//---------------------------------------------------------------
//REPORTES
//---------------------------------------------------------------
Route::get('/reportejuez1','AdministradorController@showJuecesData');
Route::get('/reporteprovincia','AdministradorController@showProvinData');
Route::get('/estadistica1','AdministradorController@showEstadisticData');

//--------------------------------------------------
//---------------------------------------------------------------
//ABOGADOS
//---------------------------------------------------------------
//---------------------------------------------------------------
//EXPEDIENTE
//---------------------------------------------------------------
Route::resource('abogar', 'AbogadoController');
//Route::get('/ubicacion','FilerecordsController@create');

Route::get('/seguimiento2','AbogadoController@index');
Route::get('/expediente2','AbogadoController@create');
//---------------------------------------------------------------
//REPORTES
//---------------------------------------------------------------
Route::get('/reportejuez2','AbogadoController@showJuecesData');
Route::get('/reporteprovincia2','AbogadoController@showProvinData');
Route::get('/estadistica2','AbogadoController@showEstadisticData');
