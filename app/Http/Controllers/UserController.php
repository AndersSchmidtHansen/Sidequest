<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function postUpgrade($id, $creditCardToken)
  {
    $user = User::find($id);
    $user->subscription('monthly')->create($creditCardToken);

    return redirect()->back();
  }

}
