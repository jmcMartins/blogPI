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

//Rota get: Pega arquivo, Rota post: Adiciona arquivo, Roda put: edita arquivo, Rota delete: Deleta arquivo

Route::get('/posts','PostController@index');

Route::get('/posts/create','PostController@create');

Route::post('posts','PostController@store');

Route::put('/post/{id}','PostController@update');

Route::get('/posts/{id}/edit','PostController@edit');

Route::delete('/posts/{id}','PostController@destroy');

Route::get('/posts/{id}','PostController@show');