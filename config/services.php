<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => env('SERVICE_MAILGUN_SECRET_API_KEY', ''),
	],

	'mandrill' => [
		'secret' => env('SERVICE_MANDRILL_SECRET_API_KEY', ''),
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'api_version' => '2015-02-10',
		'secret' => env('SERVICE_STRIPE_SECRET_API_KEY', ''),
	],

];