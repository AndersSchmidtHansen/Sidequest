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
	  View::share('app_settings', ApplicationSetting::findOrFail(1));
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
