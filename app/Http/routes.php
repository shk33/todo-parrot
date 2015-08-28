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

// Welcome routes
Route::get('/', 'WelcomeController@index');

// User Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Contact Routes
Route::get('contact',
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

// Todolist routes
Route::resource('lists', 'ListsController');
