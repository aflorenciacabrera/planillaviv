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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return view('planilla.planilla');
});
Route::get('/home', 'PlanillaController@planilla');
Route::get('/planilla', 'PlanillaController@planilla');
// Route::get('/planilla/{id}', 'PlanillaController@planilla');

Route::get('/planilla/datos', 'DatosController@datos');
Route::post('planilla/datos', 'DatosController@crear');

Route::get('/planilla/viviendas/{id}', 'ViviendaController@viviendas');
Route::post('planilla/viviendas', 'ViviendaController@crear');

});
