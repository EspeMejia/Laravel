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

Route::resource('doctors', 'DoctorController');
Route::resource('pacientes', 'PacienteController');
Route::resource('productos', 'ProductoController');
Route::resource('lineafacturas', 'LineafacturaController');
Route::resource('facturas', 'FacturaController');
Route::resource('citas', 'CitaController');

Route::get('/home', 'HomeController@index');
//Route::get('/citas', 'CitaController@index');

Route::get('/registerdoctor', function () {
    return view('auth/registerdoctor');
});
Route::get('/registersecretaria', function () {
    return view('auth/registersecretaria');
});
Route::get('/registeradmin', function () {
    return view('auth/registeradmin');
});
Route::get('/registerpaciente', function () {
    return view('auth/registerpaciente');
});

Route::get('/homesecretaria', function (){
    return view('homesecretaria');
});

Route::get('/homedoctor', function (){
    return view('homedoctor');
});

//Route::group(['middleware' => ['web']], function () use ($router) { $router->resource('whatever', 'WhateverController'); });
/**Route::get('/home', 'secre@index');
Route::get('/home', 'doctor@index');
function secre(){
    return registersecretaria.blade.php;
}
function doctor(){
    return registerdoctor.blade.php;
}*/

