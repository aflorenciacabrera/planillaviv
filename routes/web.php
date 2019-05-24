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



Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return redirect(url('planilla/ver/' . 1));
});

Route::get('/home', function () {
   return redirect(url('planilla/ver/' . 1));
});

//Route::get('/home', 'PlanillaController@planilla');
Route::get('/planilla', 'PlanillaController@planilla')->name('planilla');
Route::get('/planilla/ver/{id}', 'PlanillaController@planillaFiltro')->name('planillaFiltro');
Route::get('planilla/lista','PlanillaController@lista');
Route::get('/planilla/verificar', 'PlanillaController@verificar');

Route::get('/planilla/datos', 'DatosController@datos');
Route::post('/planilla/datos', 'DatosController@crear');
Route::get( '/planilla/ver/datos/{id}', 'DatosController@ver');
Route::get('/planilla/editar/datos/{id}', 'DatosController@editar');
Route::put( '/planilla/editar/datos/{id}', 'DatosController@update');
Route::DELETE( '/planilla/eliminar/datos/{id}', 'DatosController@delete');

Route::get('/planilla/viviendas/{id}', 'ViviendaController@viviendas');
Route::post('/planilla/viviendas', 'ViviendaController@crear');
Route::get( '/planilla/ver/viviendas/{id}', 'ViviendaController@ver');
Route::get('/planilla/editar/vivienda/{id}', 'ViviendaController@editar');
Route::put('/planilla/editar/vivienda/{id}', 'ViviendaController@update');
Route::DELETE('/planilla/eliminar/vivienda/{id}', 'ViviendaController@delete');
});
