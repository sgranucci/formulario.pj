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

Route::get('inicioCamino/{param}','FormularioController@inicioCamino')->name('inicioCamino');
Route::get('provinciasPais/{id}','FormularioController@getProvincias');
Route::get('localidadesProvincia/{id}','FormularioController@getLocalidades');
Route::get('localidadesCP/{id}','FormularioController@getCP');
Route::get('actividadId/{id}','FormularioController@getActividadId');
Route::get('actividad','FormularioController@getActividad');
Route::get('tipoRelacionLaboral','FormularioController@getTipoRelacionLaboral');
Route::post('formularioSave','FormularioController@formularioSave')->name('formularioSave');

Route::get('listadoRegistros','FormularioController@listadoRegistros')->name('listadoRegistros');
Route::post('listadoRegistros/list','FormularioController@listadoRegistros')->name('listadoRegistrosPost');
Route::get('listadoRegistros/get/{id}','FormularioController@getlistadoRegistroState')->name('getlistadoRegistroState');
Route::post('listadoRegistros/save','FormularioController@updatelistadoRegistroState')->name('updatelistadoRegistroState');

Route::get('detalleRegistro/{id}','FormularioController@detalleRegistro')->name('detalleRegistro');
Route::get('saveData', 'FormularioController@saveData')->name('saveData');
Route::post('saveData', 'FormularioController@saveData')->name('saveDataPost');
Route::post('saveDataTestInversor', 'FormularioController@saveDataTestInversor')->name('saveDataTestInversor');
Route::post('validarEstado', 'FormularioController@validarEstado')->name('validarEstado');

Route::post('/dropzone-extended/{idFoto}', 'FormularioController@dropzonePhotoExtended')->name('dropzonePhotoExtended');

Route::post('/dropzone1', 'FormularioController@dropzone1')->name('dropzone1');
Route::post('/dropzone2', 'FormularioController@dropzone2')->name('dropzone2');
Route::post('/dropzone3', 'FormularioController@dropzone3')->name('dropzone3');
Route::post('/dropzone4', 'FormularioController@dropzone4')->name('dropzone4');
Route::post('/dropzone5', 'FormularioController@dropzone5')->name('dropzone5');
Route::post('/dropzone6', 'FormularioController@dropzone6')->name('dropzone6');
Route::post('/dropzone7', 'FormularioController@dropzone7')->name('dropzone7');

Route::get('finalizar', 'FormularioController@finalizar')->name('finalizar');
Route::get('pdf/{id}', 'FormularioController@pdf')->name('pdf');
Route::get('nuevo_pdf/{id}','FormularioController@nuevoPdf')->name('nuevo_pdf');
Route::get('agregarPersona/', 'FormularioController@agregarPersona')->name('agregarPersona');


Route::get('editarCotitulares','FormularioController@editarCotitulares')->name('editarCotitulares');
Route::get('eliminaCotitular/{id}','FormularioController@eliminaCotitular')->name('eliminaCotitular');
Route::get('modificaCotitular/{id}','FormularioController@modificaCotitular')->name('modificaCotitular');


Route::get('limpieza_inicial/{token}','FormularioController@limpiezaInicial');
