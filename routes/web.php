<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great! ASANCHEZ
|
*/

Route::get('/', function () {
  // return view('content/index');
    return view('Registro/InformacionUsuario');/*Prueba de implementacion blade JJ*/
});

Route::get('auth/login', 'AuthController@authenticate');
Route::post('auth/login', 'AuthController@authenticate');
Route::get('/login', function () {
      return view('auth/login');
});



Route::get('/navforms', function () {
    return view('/partials/navforms');
});

Route::get('/informacionusuario', function () {
    return view('/Registro/InformacionUsuario');
});




