{!! Form::open(['url' => '/subscription/swap-plan']) !!}
  <h4>Your plan</h4>
  <p>You are on the <strong>{{ $current_plan or '' }}</strong> plan.</p>
  
  <label>
    <div>Change your plan</div>
    {!! Form::select('plan_to_swap_to', $subscriptions, $user->stripe_plan) !!}
  </label>

  <div class="form-group">
    {!! Form::submit('Upgrade') !!}
  </div>
{!! Form::close() !!}