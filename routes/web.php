<?php
use Illuminate\Support\Facades\Route;
use League\Flysystem\RootViolationException;

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
Route::get('/', 'UserController@index')->name('users.index');
Route::get('/usuarios', 'UserController@home')->name('users.home');
Route::get('/usuarios/registarse', 'UserController@register')->name('users.register');

Route::get('/usuarios/ver/{id}', 'UserController@show')->where('id', '[0-9]+')->name('users.show');
Route::get('/usuarios/editar/{id}', 'UserController@edit')->name('users.edit');
Route::get('/usuarios/eliminar/{id}', 'UserController@delete')->name('users.delete');

Route::post('/usuarios/registrado', 'UserController@create')->name('users.create');
Route::post('/usuarios/actualizar/{id}', 'UserController@update')->name('users.update');
