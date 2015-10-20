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

Route::get('/', 'HomeController@showWelcome');
Route::get('quote', 'HomeController@startQuote');
Route::get('api/states', 'HomeController@getStates');
Route::get('api/dropdown', 'HomeController@getdropdowns');
Route::post('quote', 'HomeController@startQuote');
Route::post('quote/customer', 'HomeController@stepQuote');
Route::get('quote/customer', 'HomeController@stepQuote');
// Admin
Route::get('admin', 'AdminController@index');
Route::get('admin/system', 'AdminController@system');
Route::get('admin/system/options', 'AdminController@system');
Route::get('admin/create/user', 'AdminController@createUser');
Route::get('admin/user/{id}', 'AdminController@editUser');

Route::get('admin/field/{id}', 'DropdownController@edit');
Route::post('admin/field/update/{id}', array('as' => 'field.update', 'uses' => 'DropdownController@update'));

Route::post('admin/store/user',array('as' => 'admin.user', 'uses' => 'AdminController@storeUser'));
Route::post('admin/update/user/{id}',array('as' => 'admin.update.user', 'uses' => 'AdminController@updateUser'));

Route::get('admin/opt/{id}', 'OptionController@edit');
Route::post('admin/opt/update/{id}', array('as' => 'opt.update', 'uses' => 'OptionController@update'));

Route::resource('loc', 'LocationController');
Route::get('admin/system/locations', 'LocationController@index');

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
