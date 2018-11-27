<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    // print_r($_POST);
});



Route::get('/test', 'PostsController@test' );


Route::get('/admin/post/read', 'PostsController@read' )->name('all_post');
Route::get('/admin/post/create', 'PostsController@create' )->name('create_post');
Route::post('/admin/post/create', 'PostsController@create' )->name('post_created');
Route::get('/admin/post/update/{post_id}', 'PostsController@update' )->name('edit_post');
Route::put('/admin/post/update/{post_id}', 'PostsController@update' )->name('post_edited');
Route::get('/admin/post/delete/{post_id}', 'PostsController@delete' )->name('delete_post');

// 
Route::get('/admin/category/read', 'CatsController@read' );
Route::get('/admin/category/create', 'CatsController@create' );
Route::get('/admin/category/update', 'CatsController@update' );
Route::get('/admin/category/delete', 'CatsController@delete' );

