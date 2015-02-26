<?php namespace App\Http\Controllers;

use Auth;
use Request;
use App\Plan;
use App\Http\Requests;
use App\ApplicationSetting;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PlanController;

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

  protected $settings;
  protected $user;
  protected $plan;

  public function __construct()
  {
    $this->middleware('admin');
    $this->settings = ApplicationSetting::findOrFail(1);
    $this->user = Auth::user();
    $this->plan = new Plan;
  }

  public function getIndex()
  {
    $title = 'Settings';
    $user = $this->user;
    $settings = $this->settings;

    return view('admin.index', compact('title', 'settings', 'user'));
  }

  public function getUsers()
  {
    $title = 'Users';
    return view('admin.users', compact('title'));
  }

  public function getPlans()
  {
    $title = 'Plans';
    $plans = Plan::all();
    return view('admin.plans', compact('title', 'plans'));
  }

  public function postUpdateSettings()
  {

    $setting = $this->settings;

    $exceptions = [
      '_token',
      'apple_touch_icon_152x152',
      'apple_touch_startup_image_640x920',
      'apple_touch_startup_image_640x1096',
      'apple_touch_startup_image_750x1334',
      'apple_touch_startup_image_1242x2208',
      'apple_touch_startup_image_1536x2008',
      'application_shortcut_icon_196x196',
      'application_favicon_ico_32x32',
      'application_favicon_png_32x32',
      'company_logo'
    ];

    $input = Request::except($exceptions);
    
    // Handle common settings
    foreach($input as $key => $value)
    {
      $setting[$key] = $value;
    }

    $setting->save();


    /**
    * Handle uploading meta images such as shortcut icons,
    * Apple touch images and other assets
    */
    function saveUploadedImages($images = [], $destinationPath)
    {
      foreach ($images as $key => $value) {
        if( Request::hasFile($key) ) {
          $image = Request::file($key);
          $image->move($destinationPath . "/", $value);
        }
      }
    }

    $icons_touch_images_path = base_path() . '/public/img';

    $icons_touch_images = [
      'application_shortcut_icon_196x196'   => 'shortcut-icon-196x196.png',
      'application_favicon_ico_32x32'       => 'shortcut-icon.ico',
      'application_favicon_png_32x32'       => 'shortcut-icon.png',

      'apple_touch_icon_152x152'            => 'apple-touch-icon.png',
      'apple_touch_startup_image_640x920'   => 'apple-touch-startup-image-640x920.png',
      'apple_touch_startup_image_640x1096'  => 'apple-touch-startup-image-640x1096.png',
      'apple_touch_startup_image_750x1334'  => 'apple-touch-startup-image-750x1334.png',
      'apple_touch_startup_image_1242x2208' => 'apple-touch-startup-image-1242x2208.png',
      'apple_touch_startup_image_1536x2008' => 'apple-touch-startup-image-1536x2008.png',

      'company_logo'                        => 'company_logo.svg'
    ];

    saveUploadedImages($icons_touch_images, $icons_touch_images_path);

    return redirect()->back();

  }

  public function getImportSubscriptionPlans()
  {
    $plan = new PlanController;
    $plan->importPlans();
    return redirect()->back();
  }

  public function postUpdateCachedPlan($id)
  {
    $plan = $this->plan->find($id);
    $plan->description = Request::input('plan_description');
    $plan->features = Request::input('plan_features');
    $plan->save();
    return redirect()->back();
  }

  public function postDeleteCachedPlan($id)
  {
    $plan = $this->plan->find($id);
    $plan->delete();
    return redirect('admin/plans');
  }
  
}
