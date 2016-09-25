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


   //return view('Registro.registro');
//Route::get('/registro', 'FormController@registrarFormulario');

Route::get('/registro', function () {
   $data = Request::all();
    return  $data;
  });

      Route::get('/index', function () {
        return view('content/index');
      });





Route::get('/navforms','FormController@mostrarDatosFormulario');
Route::post('/navforms','FormController@mostrarDatosFormulario');

//Route::get('/navforms1','FormController@mostrarEstados');
//Route::post('/navforms1','FormController@mostrarEstados');

//Route::get('/navforms2','FormController@mostrarSector');
//Route::post('/navforms2','FormController@mostrarSector');

Route::post('storage/create', 'FormController@save');

Route::get('partials/navforms',array('isActiva'=>0));

Route::post('registro', 'FormController@save');
Route::get('auth/login', 'AuthController@authenticate');
Route::post('auth/login', 'AuthController@authenticate');
Route::post('/', 'AuthController@getLogin');
Route::get('/', 'AuthController@getLogin');
/*Route::get('/login', function () {
      return view('auth/login',array('id'=>0));
});*/

Route::get('login/{id}', function($id){
    return view('auth/login', array('id'=>$id));
});






Route::get('/informacionusuario', function () {
    return view('/Registro/InformacionUsuario');
});
