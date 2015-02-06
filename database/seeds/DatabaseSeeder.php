<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ApplicationSetting;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ApplicationSettingsTableSeeder');
		$this->call('UserTableSeeder');
		
	}

}

/**
* Prepare a User Database Seed
*/
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('users')->delete();

		$data = [
			'name' =>	'John Doe',
			'email' => 'foo@bar.com',
			'password' => bcrypt('secret')
		];

		User::create($data);
	}
}

/**
* Prepare an Application Settings Database Seed
*/
class ApplicationSettingsTableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('application_settings')->delete();

		$data = [
			'name' =>	'Sidequest',
			'customer_support_email' => 'support@sidequest.io'
		];

		ApplicationSetting::create($data);
	}
}
