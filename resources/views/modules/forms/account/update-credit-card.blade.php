<h4>Your card information</h4>
<p>The card we have on file ends with {{ $user->getLastFourCardDigits() }}.</p>
  
{!! Form::open(['url' => '/subscription/update-credit-card', 'role' => 'payment-form', 'data-gateway-publishable-key' => $app_settings->service_stripe_api_key_publishable]) !!}
  
  @include('modules.forms.credit-card')

  <button role="submit">Update card</button>
  
{!! Form::close() !!}