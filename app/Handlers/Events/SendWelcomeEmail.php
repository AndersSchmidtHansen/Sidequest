<?php namespace App\Handlers\Events;

use Postman;
use App\User;
use App\ApplicationSetting;
use App\Events\UserSignedUp;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendWelcomeEmail implements ShouldBeQueued {

	use InteractsWithQueue;

	protected $settings;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->settings = ApplicationSetting::find(1);
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserSignedUp  $event
	 * @return void
	 */
	public function handle(UserSignedUp $event)
	{

		$user = User::findOrFail($event->user_id);
		$settings = $this->settings;
		
		$postman = new Postman;
		$postman->deliver('emails.welcome', ['user' => $user], $user, 'Welcome to ' . $settings->name . '!');
		
	}

}
