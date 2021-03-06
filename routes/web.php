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


Route::resource('roles', 'RoleController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

Route::resource('comments', 'CommentController');

Route::resource('postAuthors', 'PostAuthorController');