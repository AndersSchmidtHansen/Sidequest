<?php 

return array(

  /*
  |--------------------------------------------------------------------------
  | Bugsnag Settings
  |--------------------------------------------------------------------------
  |
  */
 
  'api_key' => env('SERVICE_BUGSNAG_SECRET_API_KEY'),
  'notify_release_stages' => ['production', 'staging']

);