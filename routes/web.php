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
    return view('Registro/RedesSociales');/*Prueba de implementacion blade JJ*/
});
