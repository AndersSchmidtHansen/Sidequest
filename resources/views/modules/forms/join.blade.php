<div class="panel panel-default panel-slim">
  <div class="panel-heading"><strong>Upgrade your {{ $app_settings->name }} account</strong></div>
    <div class="panel-body">
      <p>You're on the <strong>FREE</strong> plan. That's cool. We can make your life even easier with one of our paid plans though.</p>

      {!! Form::open(['url' => '/subscription/join', 'role' => 'payment-form', 'data-gateway-publishable-key' => $app_settings->service_stripe_api_key_publishable, 'novalidate', 'autocomplete' => 'on']) !!}
          
          <div class="form-group">
            <label for="plan"><div>Select a plan that fits your needs</div></label>
            <select name="plan" id="plan" class="form-control">
              <option>Select a plan</option>
              @foreach($plans as $plan)
                <option value="{{ $plan->plan_id }}">{{ $plan->name }}</option>
              @endforeach
            </select>
          </div>

          @include('modules.forms.credit-card')
          
          <button role="submit" class="btn btn-success btn-block">Make payment</button>

      {!! Form::close() !!}
  
    </div>
  </div>
</div>