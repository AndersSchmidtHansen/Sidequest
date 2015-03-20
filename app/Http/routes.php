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
get('/',              'StaticPageController@index');
get('about',          'StaticPageController@about');
get('pricing',        'StaticPageController@pricing');
get('contact',        'StaticPageController@contact');
get('terms-of-use',   'StaticPageController@termsOfUse');
get('privacy-policy', 'StaticPageController@privacyPolicy');
get('components',     'StaticPageController@components');

// Authentication & Dynamic Page Management
Route::controllers([
	'auth'         => 'Auth\AuthController',
	'password'     => 'Auth\PasswordController',
  'admin'        => 'AdminController',
  'home/your'    => 'UserController',
  'subscription' => 'SubscriptionController',
  'home'         => 'HomeController'
]);

// Email Testing Routes
get('test/email', function(){ 
  return view('emails.layout'); 
});

get('test/email/password-reset', function(){ 
  return view('emails.password'); 
});

get('test/email/new-sign-up', function()  { 
  return view('emails.welcome')->with('app_settings', App\ApplicationSetting::find(1)); 
});