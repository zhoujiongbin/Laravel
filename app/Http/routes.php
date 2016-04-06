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

Route::get('/', 'IndexController@index');

Route::any('login', 'UserController@login');

Route::any('sign', 'UserController@index');

Route::get('book/{id}', 'BookController@show');

Route::get('lagout', 'UserController@lagout');

Route::get('bookshelf', 'UserController@shelf');

Route::get('tag/{name}', 'BookController@tag');

Route::get('api/addShelf', 'APIController@addShelf');

Route::get('api/changeShelf', 'APIController@changeShelf');

Route::get('api/zongheng/{type}/{num}', 'APIController@zongheng')->where('num', '[0-9]+');

Route::get('api/bookshelf/{type}', 'APIController@userShelf')->where('type', '^[0,1,2,3]$');

Route::any('user/{id}/setting', 'UserController@update')->where('id', '[0-9]+');

Route::post('api/addComment', 'APIController@addComment');

Route::post('api/addBooklist',  'BookListController@create');

Route::get('user/{id}/comments', 'UserController@comment')->where('id', '[0-9]+');

Route::get('user/{id}/booklist', 'UserController@booklist')->where('id', '[0-9]+');

Route::get('booklist/{id}', 'BookListController@show')->where('id', '[0-9]+');

Route::get('comments', 'BookController@allComments');

Route::get('api/search', 'APIController@search');

Route::get('top', function(){
	return view('top');
});

Route::get('booklist', 'BookListController@index');

Route::post('api/addBook', 'BookListController@addBook');

Route::get('search', 'BookController@search');