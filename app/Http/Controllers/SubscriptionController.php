<?php namespace App\Http\Controllers;

use Input;
use Postman;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe, Stripe_Error;

class SubscriptionController extends Controller {

  protected $postman;

  public function __construct()
  {
    Stripe::setApiVersion(config('services.stripe.api_version'));

    $this->middleware('auth');
    $this->postman = new Postman;
    parent::__construct();
  }

  /**
   * Handles subscribing the user to a plan for the first tim.e
   * 
   * @return void
   */
  public function postJoin()
  {
    $this->user
    ->subscription(Input::get('plan'))
    ->create(Input::get('token'),[
      'email'       => $this->user->email,
      'description' => $this->user->name
    ]);

    return redirect()->back()->with('notice', 'You are now subscribed! A receipt has been sent to your email');
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

  /**
   * Toggles an individual user's tester status
   * on and off. Useful for getting early 
   * feedback and for beta testers.
   * 
   * It basically just toggles stripeIsActive
   * between true and false. If they already
   * have a subscription though, nothing
   * happens.
   * 
   * @param  int $id ID of the individual user
   */
  function toggleTesterStatus($id)
  {
    $user = User::find($id);

    if( !$user->readyForBilling() ) {
      if( $user->stripeIsActive() ){
        $user->setStripeIsActive(false);
        $user->save();
        return response()->json(['status' => 200, 'message' => 'User no longer has Tester status.']);    
      }

      $user->setStripeIsActive();
      $user->save();
      return response()->json(['status' => 200, 'message' => 'User succesfully upgraded to tester.']);
    }

    return response()->json(['status' => 401, 'message' => 'User already has a subscription. Aborting.']);

  }

}
