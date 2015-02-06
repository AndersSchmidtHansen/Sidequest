<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application_settings', function(Blueprint $table)
		{
			$table->increments('id');

			// General Settings
			$table->string('name');

			// Company Details
			$table->string('customer_support_email');
			$table->string('company_address');

			// Service API Keys
			$table->string('service_mailgun_api_key');
			$table->string('service_mandrill_api_key');
			$table->string('service_stripe_api_key');
			$table->string('service_google_analytics_api_key');
			$table->string('service_google_site_verification_key');
			$table->string('service_heap_analytics_api_key');
			$table->string('service_olark_api_key');

			// Social Media Connections
			$table->string('social_facebook_app_id');
			$table->string('social_twitter_app_id');
			$table->string('social_twitter_handle');
			$table->string('social_google_plus_id');
			$table->string('social_google_play_app_id');

			// Notifications & Emails
			$table->string('email_global_from_name');
			$table->string('email_global_from_address');
			$table->string('email_server_username');
			$table->string('email_server_password');
			
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('application_settings');
	}

}
