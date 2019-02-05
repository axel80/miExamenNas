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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
  
    Route::resource('alumnos', 'AlumnoController');
    Route::post('alumno/update', [
        'uses' => 'AlumnoController@update',
        'as'   => 'alumno.update'
    ]);

    Route::resource('materias', 'MateriaController');
    Route::post('materia/update', [
        'uses' => 'MateriaController@update',
        'as'   => 'materia.update'
    ]);
});
