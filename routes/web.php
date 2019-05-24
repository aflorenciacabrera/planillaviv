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
Route::put('/planilla/editar/datos/{id}', 'DatosController@editar');

Route::get('/planilla/viviendas/{id}', 'ViviendaController@viviendas');
Route::post('/planilla/viviendas', 'ViviendaController@crear');
Route::get( '/planilla/ver/viviendas/{id}', 'ViviendaController@ver');
Route::put('/planilla/editar/vivienda/', 'ViviendaController@editar');

});
