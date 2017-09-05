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

Route::get('/','PostsController@index');
Route::get('/register','RegistrationController@create');
Route::get('/login', 'SessionsController@create');

Route::group(['middleware' => ['auth']], function(){
	
Route::get('/posts/create', 'PostsController@create');
Route::get('/logout', 'SessionsController@logout');
Route::post('/posts','PostsController@store');
});

Route::get('/posts/{post}','PostsController@show');

Route::post('/login','SessionsController@auth');
Route::post('/users', 'RegistrationController@store');
Route::post('/posts/{post}/comments','CommentsController@store');

