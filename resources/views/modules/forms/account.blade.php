{!! Form::open(['url' => '/subscription/swap-plan']) !!}
  <h4>Your plan</h4>
  <p>You are on the <strong></strong> plan. It will renew on {{ $user->getTrialEndDate() }}.</p>
  
  <label>
    <div>Change your plan</div>
    {!! Form::select('plan_to_swap_to', $subscriptions, $user->stripe_plan) !!}
  </label>

  <div class="form-group">
    {!! Form::submit('Upgrade') !!}
  </div>
{!! Form::close() !!}
  
  <h4>Your card information</h4>
  <p>The card we have on file ends with {{ $user->getLastFourCardDigits() }}.</p>

{!! Form::open(['url' => '/subscription/update-credit-card']) !!}
  
  @include('modules.forms.credit-card')

  <div class="form-group">
    {!! Form::submit('Update card info') !!}
  </div>
{!! Form::close() !!}

{!! Form::open(['url' => '/subscription/cancel']) !!} 
  <h4>Cancel your account</h4>
  <p>Not what you expected? That's okay, you can easily cancel your account here.</p>
  <div class="form-group">
    {!! Form::submit('Cancel account now') !!}
  </div>
{!! Form::close() !!}


