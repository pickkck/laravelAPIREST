<?php

use Illuminate\Support\Facades\Route;

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


//Rutas para usuario

Route::get('/usuarios', 'UsuarioController@getUsuarios')->name('getUsuarios');

Route::put('/usuarios/actualizar/{idUsuario}', 'UsuarioController@updateUsuario')->name('updateUsuario');

Route::post('/usuarios/guardar', 'UsuarioController@insertUsuario')->name('insertUsuario');

Route::delete('/usuarios/borrar/{idUsuario}', 'UsuarioController@deleteUsuario')->name('deleteUsuario');

Route::get('/usuarios/buscar/{idUsuario}', 'UsuarioController@getUsuario')->name('getUsuario');
