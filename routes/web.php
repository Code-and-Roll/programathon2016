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




Route::get('/', function () {
  // return view('content/index');

<<<<<<< HEAD
//    return view('partials/navforms',array('isActiva'=>0));/*Prueba de implementacion blade JJ*/


    //return view('Registro/InformacionUsuario');/*Prueba de implementacion blade JJ*/

    return view('partials/navforms');/*Prueba de implementacion blade JJ*/
=======
   return view('partials/navforms',array('isActiva'=>0));/*Prueba de implementacion blade JJ*/

   // return view('Registro/InformacionUsuario');/*Prueba de implementacion blade JJ*/

    //return view('partials/navforms');/*Prueba de implementacion blade JJ*/
>>>>>>> 9cea4577a90f3e4311a70e2eafb9623f2b11a60d

    //return view('Registro/RedesSociales');/*Prueba de implementacion blade JJ*/
    //return view('Registro/InformacionUsuario');
    //return view('Registro/InformacionPyme');

});

Route::get('/navforms','FormController@mostrarPaises');
Route::post('/navforms','FormController@mostrarPaises');
Route::get('partials/navforms',array('isActiva'=>0));

Route::get('auth/login', 'AuthController@authenticate');
Route::post('auth/login', 'AuthController@authenticate');
Route::get('/login', function () {
      return view('auth/login',array('id'=>0));
});

Route::get('login/{id}', function($id){
    return view('auth/login', array('id'=>$id));
});




Route::get('/informacionusuario', function () {
    return view('/Registro/InformacionUsuario');
});
