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

Route::get('/usuarios', function(){
    return 'Usuarios route';
});

Route::get('/usuario/{id}', function( $id ){
  return 'Usuario: '.$id;
})->where('id','\d+');

Route::get('/usuario/nuevo', function(){
  return 'Crear nuevo usuario';
});

Route::get('/saludo/{nombre}/{nacionalidad?}', function( $nombre, $nacionalidad = null ){
  if( $nacionalidad == null ) return "Holis {$nombre}";
  else return "Hola {$nombre} de {$nacionalidad}";
});
