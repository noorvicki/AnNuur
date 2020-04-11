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


Route::get('/', 'SuratController@index');
Route::get('/surat/{id}', 'SuratController@show');
Route::get('/kategori', 'FrontController@kategori');
Route::get('/kategori/{kategori}', 'FrontController@post_kategori');
Route::get('/post/{kategori}/{judul}', 'FrontController@post');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::get('profile', 'UserController@editProfile');
    Route::post('update-profile', 'UserController@updateProfile');

	Route::resource('kategoris', 'KategoriController');

	Route::resource('tags', 'TagController');

	Route::resource('posts', 'PostController');
	});








