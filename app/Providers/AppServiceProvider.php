<?php namespace App\Providers;

use View;
use App\ApplicationSetting;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
	
	  /**
	   * Share Application Settings throughout the app.
	   * @var $app_settings
	   */
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
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar',			
			'App\ApplicationSetting'
		);
	}

}
