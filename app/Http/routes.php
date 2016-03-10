<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

	/*
	|--------------------------------------------------------------------------
	| Main routes
	|--------------------------------------------------------------------------
	*/

	Route::get('/', 'HomeController@showHomePage')->name('home');

	/*
	|--------------------------------------------------------------------------
	| Auth routes
	|--------------------------------------------------------------------------
	*/

	Route::get('/login', 'Auth\AuthController@showLoginForm');
	Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

	Route::post('/login', 'Auth\AuthController@login')->name('login');

	/*
	|--------------------------------------------------------------------------
	| Admin routes
	|--------------------------------------------------------------------------
	*/

	Route::group(['middleware' => 'phantom', 'prefix' => 'admin'], function () {
		Route::get('/', 'AdminController@showHomePage')->name('admin');
	});
});
