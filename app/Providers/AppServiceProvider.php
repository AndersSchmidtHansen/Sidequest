<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ApplicationSetting;
use View;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	
	  // Share Application Settings with all Controllers
	  // and Views.
	  $app_settings = ApplicationSetting::findOrFail(1);
	  View::share('app_settings', $app_settings);

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'App\ApplicationSetting'
		);
	}

}
