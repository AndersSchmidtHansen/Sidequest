<?php namespace App\Http\Controllers;

use Auth;
use View;
use App\ApplicationSetting;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

  use DispatchesCommands, ValidatesRequests;

  /**
   * The authenticated user.
   * 
   * @var \App\User|null
   */
  protected $user;

  /**
   * Is the user signed in?
   * 
   * @var \App\User|null
   */
  protected $signedIn;

  /**
  * Share Application Settings throughout the app. 
  * 
  * @var $app_settings
  */
  protected $app_settings;

  /**
   * Create a new controller instance.
   * 
   */
  public function __construct()
  {
    $this->user = $this->signedIn = Auth::user();
    $this->app_settings = ApplicationSetting::findOrFail(1);
    View::share('app_settings', $this->app_settings);
  }

}