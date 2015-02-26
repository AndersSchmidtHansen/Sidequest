<?php namespace App\Http\Controllers;

use App\Plan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe, Stripe_Plan, Stripe_Error;

class PlanController extends Controller {

  protected $stripe_key;

  public function __construct()
  {
    $this->stripe_key = Stripe::setApiKey(env('SERVICE_STRIPE_SECRET_API_KEY'));
    $this->stripe_plan = new Stripe_Plan;
  }

  public function importPlans()
  {

    $plans = $this->stripe_plan->all();

    foreach( $plans->data as $plan )
    {
      $plan = Plan::firstOrCreate([
        'plan_id'   => $plan->id,
        'name'      => $plan->name,
        'amount'    => $plan->amount,
        'currency'  => $plan->currency,
        'interval'  => $plan->interval
      ]);
    }

  }

}
