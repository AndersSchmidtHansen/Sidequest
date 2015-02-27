<?php namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller {

  /**
   * Handles subscribing the user to a plan for the first time.
   * 
   * @return void
   */
  public function postJoin()
  {
    $this->user
    ->subscription(Input::get('plan'))
    ->create(Input::get('token'),[
      'email' => $this->user->email,
      'description' => $this->user->name
    ]);

    return redirect()->back()->with('notice', 'You are now subscribed!');
  }

  /**
   * Handles cancelling a user's subscription.
   * 
   * @return void
   */
  public function postCancel()
  {
    $this->user->subscription()->cancel();

    return redirect()->back()->with('notice', 'Sorry to see you go.');
  }

  /**
   * Handles resuming a user's subscription after cancelling.
   * 
   * @return void
   */
  public function postResume()
  {
    $this->user->subscription($this->user->stripe_plan)->resume();

    return redirect()->back()->with('notice', 'Happy to see you back!');
  }  

  /**
   * Handles updating the user's current credit card with new information.
   * 
   * @return void
   */
  public function postUpdateCreditCard()
  {
    $token = Input::get('token');
    $this->user->updateCard($token);

    return redirect()->back()->with('notice', 'Your credit card information has been updated!');
  }

  /**
   * Handles swapping the user's plan for a different one
   * 
   * @return void
   */
  public function postSwapPlan()
  {
    $input = Input::get('plan_to_swap_to');
    $this->user->subscription($input)->swap();
    
    return redirect()->back();
  }

}
