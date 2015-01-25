<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPageController extends Controller {

	public function about()
  { 
    $title = 'About';
    return view('pages.about', compact('title'));
  }

}
