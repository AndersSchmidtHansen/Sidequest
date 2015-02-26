<?php namespace App\Http\Controllers;

use Request;
use App\Plan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Stripe, Stripe_Plan, Stripe_Error;

class PlanController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Plan Controller
  |--------------------------------------------------------------------------
  |
  | Subscription plans should also be easy to integrate into the application
  | in such a way that you can present plans to users, delete them, update
  | them and so forth. Since polling Stripe is slow, we cache plans here.
  |
  */

  protected $stripe_key;

  public function __construct()
  {
    $this->stripe_key = Stripe::setApiKey(env('SERVICE_STRIPE_SECRET_API_KEY'));
    $this->stripe_plan = new Stripe_Plan;
    $this->plan = new Plan;
  }

  public function importPlansToCache()
  {

    $plans = $this->stripe_plan->all();

    foreach( $plans->data as $stripe_plan )
    {
      $plan = $this->plan->firstOrCreate([
        'plan_id'   => $stripe_plan->id,
        'name'      => $stripe_plan->name,
        'amount'    => $stripe_plan->amount,
        'currency'  => $stripe_plan->currency,
        'interval'  => $stripe_plan->interval
      ]);
    }

  }

  /**
   * Handles updating a cached plan.
   * 
   * @return void
   */
  public function updateCachedPlan($plan_id)
  {
    $plan = $this->plan->find($plan_id);
    $plan->description = Request::input('plan_description');
    $plan->features = Request::input('plan_features');
    $plan->save();    
  }

  /**
   * Handles deleting a plan from cache.
   *  
   * @return void
   */
  public function deleteCachedPlan($plan_id)
  {
    $plan = $this->plan->find($plan_id);
    $plan->delete();
  }

  /**
   * Handles deleting a plan from both Stripe and cache.
   *
   * @return void
   */
  public function deletePlanFromStripe($plan_stripe_id)
  {
    $plan = $this->stripe_plan->retrieve($plan_stripe_id);
    $cached_plan = $this->plan->where('plan_id', '=', $plan_stripe_id);
    $plan->delete();
    $cached_plan->delete();
  }

}
