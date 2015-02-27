<?php namespace App\Http\Controllers;

use App\Plan;
use App\ApplicationSetting;
use Illuminate\Support\Str;

class HomeController extends Controller 
{

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$title = 'Dashboard';
		$user = $this->user;
		$plans = Plan::all();
	
		return view('home.index', compact('title', 'user', 'plans'));
	}

}
