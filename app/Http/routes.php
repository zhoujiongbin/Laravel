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
Route::get('/',function () {
    return view('index');
});

Route::get('test', 'IndexController@index');

Route::post('login', 'UserController@login');

Route::any('sign', 'UserController@index');

Route::get('book/{id}', 'BookController@show');

Route::get('lagout', 'UserController@lagout');

Route::get('bookshelf', 'UserController@shelf');

Route::get('tag/{name}', 'BookController@tag');

Route::get('api/addShelf', 'APIController@addShelf');

Route::get('api/zongheng/{type}/{num}', 'APIController@zongheng')->where('num', '[0-9]+');

Route::get('api/bookshelf/{type}', 'APIController@userShelf')->where('type', '^[0,1,2,3]$');

Route::get('top/', function(){
	return view('top');
});