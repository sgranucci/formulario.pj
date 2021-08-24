<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.register');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::resource('paises',                'PaisController');
Route::resource('estadociviles',         'EstadoCivilController');
Route::resource('generos',               'GeneroController');
Route::resource('tipodomicilios',        'TipoDomicilioController');
Route::resource('tipodocumentos',        'TipoDocumentoController');
Route::resource('tiporelacionlaborales', 'TipoRelacionLaboralController');
Route::resource('actividades',           'ActividadController');
Route::resource('origenfondos',          'OrigenFondoController');
Route::resource('formulario',            'FormularioController');

Route::get('provinciasPais/{id}','FormularioController@getProvincias');
Route::get('localidadesProvincia/{id}','FormularioController@getLocalidades');
Route::get('localidadesCP/{id}','FormularioController@getCP'); 
Route::get('actividadId/{id}','FormularioController@getActividadId'); 
Route::get('actividad','FormularioController@getActividad'); 
Route::get('tipoRelacionLaboral','FormularioController@getTipoRelacionLaboral'); 
Route::post('formularioSave','FormularioController@formularioSave')->name('formularioSave');       
Route::get('listadoRegistros','FormularioController@listadoRegistros')->name('listadoRegistros');   
Route::get('detalleRegistro/{id}','FormularioController@detalleRegistro')->name('detalleRegistro');
Route::post('saveData', 'FormularioController@saveData')->name('saveData');  
Route::post('saveDataTestInversor', 'FormularioController@saveDataTestInversor')->name('saveDataTestInversor');      
Route::post('validarEstado', 'FormularioController@validarEstado')->name('validarEstado');   
Route::post('dropzone1', 'FormularioController@dropzone1')->name('dropzone1'); 
Route::get('finalizar', 'FormularioController@finalizar')->name('finalizar'); 
Route::get('pdf/{id}', 'FormularioController@pdf')->name('pdf'); 