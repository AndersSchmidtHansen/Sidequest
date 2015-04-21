{!! Form::open(['url' => '/subscription/join', 'role' => 'payment-form', 'data-gateway-publishable-key' => $app_settings->service_stripe_api_key_publishable, 'novalidate', 'autocomplete' => 'on']) !!}
    
    <div>Select a plan</div>
    <select name="plan" id="plan">
      @foreach($plans as $plan)
        <option value="{{ $plan->plan_id }}">{{ $plan->name }}</option>
      @endforeach
    </select>

    @include('modules.forms.credit-card')
    
    <button role="submit">Make payment</button>

{!! Form::close() !!}