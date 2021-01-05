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
Route::get('/', 'UserController@home')->name('users.home');
Route::get('/usuarios', 'UserController@index')->name('users.index');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');
Route::get('/usuarios/{id}/editar', 'UserController@edit')->name('users.edit');
Route::get('/usuarios/{id}/eliminar', 'UserController@delete')->name('users.delete');
Route::post('/usuarios/actualizar', 'UserController@update')->name('users.update');
Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');
Route::post('/usuarios/crear', 'UserController@newuser')->name('users.newuser');

