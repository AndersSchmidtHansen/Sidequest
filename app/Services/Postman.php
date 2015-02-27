<?php namespace App\Services;

use Mail;

class Postman extends Mail
{

  /**
   * Delivers a queued email to a recipient.
   * 
   * @param  string $letter  the template to use, e.g. 'emails.welcome'
   * @param  array  $content key, value based array for attaching data to the email
   * @param  object $to      usually the user object, to fetch an email and name
   * @param  mixed  $subject the subject, usually a mix between a string and some data
   * @return void
   */
  public function deliver($letter = null, $content = null, $to = null, $subject = null)
  {
    Mail::queue($letter, $content, function($message) use ($to, $subject)
    {
        $message->to($to->email, $to->name)->subject($subject);
    });

  }

}