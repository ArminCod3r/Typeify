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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', ['middleware' => 'check_admin', 'uses' => 'admin\AdminController@index']);
Route::resource('admin/comment', 'admin\CommentController');
Route::get('admin/comment/approve/{comment_id}', 'admin\CommentController@approve');

// admin, PostsController
Route::get('admin/post/create', 'admin\PostController@create');


Route::get('admin_login','admin\AdminController@admin_login');

Route::resource('comment', 'CommentController');