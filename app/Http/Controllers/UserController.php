<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function postUpgrade($id)
  {
    $token = Input::get('stripeToken');

    $user = User::find($id);
    $user->subscription('monthly')->create($token);

    return redirect()->back();
  }

}
