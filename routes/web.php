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

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/view/{id}', 'PostController@view')->name('post.view');

Route::get('/posts/add', 'PostController@add')->name('post.add');
Route::post('/posts/add', 'PostController@create')->name('post.create');

Route::get('/posts/delete/{id}', 'PostController@delete')->name('post.delete');

Route::get('/posts/edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/posts/edit/{id}', 'PostController@update')->name('post.update');

Route::get('/categories', 'CategoryController@index')->name('category.index');

Route::get('/categories/add', 'CategoryController@add')->name('category.add');
Route::post('/categories/add', 'CategoryController@create')->name('category.create');

Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/categories/edit/{id}', 'CategoryController@update')->name('category.update');

Route::get('/comments/add', 'CommentController@create')->name('comment.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
