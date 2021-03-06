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




Route::get('/', 'BlogsController@home' )->name('blog');
Route::get('/admin/post/single/{post_id}', 'BlogsController@single' )->name('single_page');
Route::get('/blog/category/{cat_id}','BlogsController@searchByCategory' )->name('search_by_category');
Route::get('/blog/search','BlogsController@searchInContent' )->name('search_in_content');
Route::get('/test', 'PostsController@test' );






Route::get('/admin/post/read', 'PostsController@read' )->name('all_post')->middleware('auth');
Route::get('/admin/post/create', 'PostsController@create' )->name('create_post')->middleware('auth');;
Route::post('/admin/post/create', 'PostsController@create' )->name('post_created')->middleware('auth');;
Route::get('/admin/post/update/{post_id}', 'PostsController@update' )->name('edit_post')->middleware('auth');;
Route::put('/admin/post/update/{post_id}', 'PostsController@update' )->name('post_edited')->middleware('auth');;
Route::get('/admin/post/delete/{post_id}', 'PostsController@delete' )->name('delete_post')->middleware('auth');;

// 
Route::get('/admin/category', 'CatsController@read' )->name('all_cat')->middleware('auth');;
Route::post('/admin/category/create', 'CatsController@create' )->name('cat_created')->middleware('auth');;

Route::auth();

Route::get('/home', 'HomeController@index');
