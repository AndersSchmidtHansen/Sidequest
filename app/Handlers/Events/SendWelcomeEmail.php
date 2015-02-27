<?php namespace App\Handlers\Events;

use App\Events\ANewUserHasRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendWelcomeEmail {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  ANewUserHasRegistered  $event
	 * @return void
	 */
	public function handle(ANewUserHasRegistered $event)
	{
		dd($event);
	}

}
