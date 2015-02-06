<?php namespace App\Http\Controllers;

use App\ApplicationSetting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class AdminController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Admin Controller
  |--------------------------------------------------------------------------
  |
  | Every modern web application has some sort of administrative dashboard
  | that enables the people behind the application to modify content and
  | get a general overview. Is also nice for non-technical founders.
  |
  */

  public function getIndex()
  {
    $title = 'Admin Dashboard';
    $settings = ApplicationSetting::findOrFail(1);

    return view('admin.index', compact('title', 'settings'));
    
  }

  public function postUpdateSettings()
  {

    $setting = ApplicationSetting::findOrFail(1);
    
    $input = Request::except('_token');

    foreach($input as $key => $value) {
      $setting[$key] = $value;
    }

    $setting->save();

    return redirect()->back();

  }
  
}
