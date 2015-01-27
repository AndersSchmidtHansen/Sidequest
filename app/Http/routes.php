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

// Static Pages
get('/', 'StaticPageController@index');
get('about', 'StaticPageController@about');
get('contact', 'StaticPageController@contact');

// Dynamic Pages
get('home', 'HomeController@index');

// User Authentication & Management
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

get('logout', 'Auth\AuthController@getLogout');