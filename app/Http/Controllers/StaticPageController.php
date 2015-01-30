<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPageController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Static Page Controller
  |--------------------------------------------------------------------------
  |
  | Most applications have a set of static pages such as about, contact
  | and so on. This controller handles the presentation of these in
  | a way that also allows for SEO using title and descriptions.
  |
  */

  public function index()
  { 
    $title = 'Embark';
    return view('welcome', compact('title'));
  }

	public function about()
  { 
    $title = 'About';
    return view('pages.about', compact('title'));
  }

  public function contact()
  { 
    $title = 'Contact';
    return view('pages.contact', compact('title'));
  }

  public function termsOfUse()
  {
    $title = 'Terms of use';
    return view('pages.terms-of-use', compact('title'));
  }

  public function privacyPolicy()
  {
    $title = 'Privacy Policy';
    return view('pages.privacy-policy', compact('title'));
  }
  
}
