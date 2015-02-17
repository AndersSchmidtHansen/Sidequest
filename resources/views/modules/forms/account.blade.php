
{!! Form::open(['url' => '/user/swap-plan']) !!}
  <h4>Your plan</h4>
  <p>Change your plan</p>
  {!! Form::select('plan_to_swap_to', ['monthly' => 'Monthly', 'yearly' => 'Yearly'], $user->stripe_plan) !!}

  <div class="form-group">
    {!! Form::submit('Update') !!}
  </div>
{!! Form::close() !!}
  
  <h4>Your card information</h4>
  The card we have registered ends with {{ $user->getLastFourCardDigits() }}

{!! Form::open(['url' => '/user/update-credit-card']) !!}
  <div class="form-group">
    {!! Form::submit('Update card info') !!}
  </div>
{!! Form::close() !!}

{!! Form::open(['url' => '/user/cancel']) !!} 
  <h4>Cancel your account</h4>
  <p>Not what you expected? That's okay, you can easily cancel your account here.</p>
  <div class="form-group">
    {!! Form::submit('Cancel account now') !!}
  </div>
{!! Form::close() !!}