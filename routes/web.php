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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/altas', 'AdminController@altas');
Route::post('/admin/altas', 'AdminController@store');

Route::get('/generar-informe', 'AlumnosController@index');
//Rutas del área de alumnos
//Route::get('/alumnos/home', 'AlumnoController@index');

//Rutas para gestionar los hechos
//Route::resource('/nuevo-hecho','HechosController');
Route::get('/nuevo-hecho', 'HechosController@create');
Route::post('/nuevo-hecho', 'HechosController@store');
Route::get('/hechos', 'HechosController@index');
Route::get('/hecho/{slug?}', 'HechosController@show');
Route::get('/hecho/{slug?}/edit','HechosController@edit');
Route::post('/hecho/{slug?}/edit','HechosController@update');
Route::post('/hecho/{slug?}/delete','HechosController@destroy');

