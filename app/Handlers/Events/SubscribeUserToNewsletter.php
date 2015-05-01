<?php namespace App\Handlers\Events;

use Mailchimp;
use App\User;
use App\ApplicationSetting;
use App\Events\UserSignedUp;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SubscribeUserToNewsletter implements ShouldBeQueued {

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

    $settings = $this->settings;

    // Only add the user to a mailing list if
    // the list actually exists. Otherwise
    // we do nothing.
    if( isset($settings->mailing_list_id) ) {
      $user = User::findOrFail($event->user_id);
      $mailing_list = new Mailchimp(env('SERVICE_MAILCHIMP_SECRET_API_KEY', ''));
      
      $mailing_list->call('lists/subscribe', array(
        'id'                => $settings->mailing_list_id,
        'email'             => array('email'=> $user->email),
        'merge_vars'        => array('FNAME'=>'', 'LNAME'=>''),
        'double_optin'      => false,
        'update_existing'   => true,
        'replace_interests' => false,
        'send_welcome'      => false,
      ));
    }

  }
}
