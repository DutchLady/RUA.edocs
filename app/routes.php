<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', 'HomeController@showWelcome');
Route::get('/', 'HomeController@showIndex');

//Search Test
Route::get('search', 'SearchController@showSearch');
Route::post('search', 'SearchController@do_search');

//Download
Route::get('download/{filename}', function($filename)
{
	$data['filename'] = $filename;
	$file = storage_path().'/media_documents/' . $filename;
	return Response::download($file);
});

// Confide routes
Route::get( 'account/create',                 'UserController@create');
Route::post('account',                        'UserController@store');
Route::get( 'account/login',                  'UserController@login');
Route::post('account/login',                  'UserController@do_login');
Route::get( 'account/confirm/{code}',         'UserController@confirm');
Route::get( 'account/recovery',        'UserController@forgot_password');
Route::post('account/recovery',        'UserController@do_forgot_password');
Route::get( 'account/reset/{token}', 'UserController@reset_password');
Route::post('account/reset',         'UserController@do_reset_password');
Route::get( 'account/logout',                 'UserController@logout');