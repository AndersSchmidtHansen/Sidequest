{!! Form::open(['url' => '/subscription/join', 'role' => 'payment-form', 'data-gateway-publishable-key' => $app_settings->service_stripe_api_key_publishable]) !!}
    
    <div>Select a plan</div>
    {!! Form::select('plan', $subscriptions) !!}

    @include('modules.forms.credit-card')
    
    <button role="submit">Make payment</button>

{!! Form::close() !!}