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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', function () {
    return view('principal.ini');
});


Route::get('/principal/ini', function () {
    return view('principal.ini');
});


Route::get('/principal/nosotros', function () {
    return view('principal.nosotros');
});


// ----------------------------

    Route::resource('accesos','AccesosController');

    Route::resource('users','UsersController');

    Route::resource('tipotrabajadors','RolesController');

    Route::resource('proyectos','ProyectosController');
    Route::get('/proyectosession','ProyectosController@indexporlogin');

    Route::resource('comunicacions','ComunicacionsController');

    Route::resource('tareas','TareasController');

    Route::resource('fotos','FotosController');

    Route::resource('docplanos','DocPlanosController');

    //Route::post('userLogeo','Auth\LoginController@postLogin');



// --------------------------

Auth::routes();

Route::get('/home', 'HomeController@index');
