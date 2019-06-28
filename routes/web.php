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

Auth::routes();

//Pabellones
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pabellon/index', 'PabellonController@index')->name('pabellones');
Route::get('/pabellon/create', 'PabellonController@create');
Route::post('/pabellon/store', 'PabellonController@store');

Route::get('/pabellon/edit/{numPabellon}', 'PabellonController@edit');
Route::post('/pabellon/update/{numPabellon}', 'PabellonController@update');

Route::get('pabellon/destroy{numPabellon}', 'PabellonController@destroy');

//Medico
Route::get('/medico/index', 'MedicoController@index')->name('medicos');

//Cirugia
Route::get('/cirugia/index', 'CirugiaController@index')->name('cirugias');
Route::get('/cirugia/create', 'CirugiaController@create');
Route::post('/cirugia/store', 'CirugiaController@store');

Route::get('/cirugia/edit/{idCirugia}', 'CirugiaController@edit');
Route::post('/cirugia/update/{idCirugia}', 'CirugiaController@update');

Route::get('cirugia/destroy{idCirugia}', 'CirugiaController@destroy');

//Detalle cirugía

Route::get('/detallecirugia/index', 'DetalleCirugiaController@index')->name('detallecirugias');
Route::get('/detallecirugia/create', 'DetalleCirugiaController@create');
Route::post('/detallecirugia/store', 'DetalleCirugiaController@store');

Route::get('/detallecirugia/edit/{idDetalleCirugia}', 'DetalleCirugiaController@edit');
Route::post('/detallecirugia/update/{idDetalleCirugia}', 'DetalleCirugiaController@update');

Route::get('detallecirugia/destroy{idDetalleCirugia}', 'DetalleCirugiaController@destroy');