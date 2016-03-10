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

Route::group(['middleware' => ['web']], function ()
{
	Route::get('/', 'HomeController@showHomePage')->name('home');
	Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
	Route::get('/auth', 'Auth\AuthController@showLoginForm');
	Route::post('/auth', 'Auth\AuthController@login')->name('auth');
});
