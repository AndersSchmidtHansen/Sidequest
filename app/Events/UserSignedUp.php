<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserSignedUp extends Event {

	use SerializesModels;

	public $user_id;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($user_id)
	{
		$this->user_id = $user_id;
	}

}
