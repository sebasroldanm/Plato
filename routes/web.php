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

Route::get('/home','HomeController@index')->name('home');

Route::get('/plato', 'PlatoController@index')->name('plato.index');

Route::get('/plato/nuevo', 'PlatoController@create')->name('plato.create');

Route::get('/plato/{plato}', 'PlatoController@edit')->name('plato.edit');
Route::post('/plato/{plato}', 'PlatoController@update');

Route::post('/create', 'PlatoController@store');

Route::delete('/plato/{plato}', 'PlatoController@destroy')->name('plato.destroy');

Route::get('/comentario/{plato}', 'PlatoController@show')->name('comentario.show');

Route::get('/comentario', 'ComentarioController@index')->name('comentario.index');

Route::get('/comentario/nuevo', 'ComentarioController@index')->name('comentario.nuevo');

Route::post('/createcoment', 'ComentarioController@store');
Auth::routes();

Route::get('/comentario/edit/{comentario}', 'ComentarioController@edit')->name('comentario.edit');
Route::post('/comentario/{comentario}', 'ComentarioController@update')->name('comentario.update');

//Route::resource('comentario','ComentarioController');

Route::delete('/comentario/{comentario}', 'ComentarioController@destroy')->name('comentario.destroy');

Route::get('/home', 'HomeController@index')->name('home');
