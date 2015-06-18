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

Route::get('/', 'WelcomeController@index');

Route::get('areas', ['uses' => 'WelcomeController@listAreas', 'as' => 'area.list']);
Route::get('area/{id}', ['uses' => 'WelcomeController@showArea', 'as' => 'area.view']);

Route::get('home', 'HomeController@index');

Route::get('/content/{id}', ['uses' => 'ContentController@view', 'as' => 'content.view']);
Route::get('/content/form/{id}', ['uses' => 'ContentController@showForm', 'as' => 'content.form']);
Route::post('/content/form', ['uses' => 'ContentController@processForm', 'as' => 'content.process_form']);
Route::get('/content/{type?}/{theme?}', ['uses' => 'ContentController@index', 'as' => 'content.index']);
Route::get('auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'login']);
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
