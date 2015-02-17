<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function postUpgrade()
  {
    $token = Input::get('stripeToken');

    Auth::user()->subscription('monthly')->create($token);

    return redirect()->back();
  }

  public function postCancel()
  {
    Auth::user()->subscription()->cancel();

    return redirect()->back();
  }

  public function postUpdateCreditCard()
  {
    return redirect()->back();
  }

  public function postSwapPlan()
  {
    $input = Input::get('plan_to_swap_to');
    
    Auth::user()->subscription($input)->swap();
    
    return redirect()->back();

  }

}
