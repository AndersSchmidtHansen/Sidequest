<?php namespace App\Http\Controllers;

use Auth;
use App\ApplicationSetting;
use Illuminate\Support\Str;

class HomeController extends Controller {

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
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$title = 'Dashboard';
		$user = Auth::user();
		$subscriptions = [];
		$current_plan = "";
		$subscription_names = explode(',', ApplicationSetting::findOrFail(1)->subscription_plans_name);

		foreach( $subscription_names as $subscription_name )
		{
			$subscriptions[Str::slug($subscription_name, "_")] = $subscription_name;
			
			if($user->stripe_plan == Str::slug($subscription_name, "_"))
			{
				$current_plan .= $subscription_name;
			}
		}
		
		return view('home.index', compact('title', 'user', 'subscriptions', 'current_plan'));
	}

}
