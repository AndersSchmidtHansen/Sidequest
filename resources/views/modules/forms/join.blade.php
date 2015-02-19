{!! Form::open(['url' => '/subscription/join']) !!}
    
    {!! Form::select('plan_to_swap_to', $subscriptions, $user->stripe_plan) !!}

 <script src="https://js.stripe.com/v2/"></script> 
 <script src="{{ asset('js/vendor/stripe.js') }}"></script>
 
 
 {{--
 <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button hidden"
    data-key="{{ $app_settings->service_stripe_api_key_publishable }}"
    data-amount="{{ $app_settings->payment_widget_plan_price }}"
    data-email="{{ Auth::user()->email }}"
    data-name="{{ $app_settings->payment_widget_company_name }}"
    data-label="{{ $app_settings->payment_widget_button_text }}"
    data-description="{{ $app_settings->payment_widget_description }}"
    data-panel-label="{{ $app_settings->payment_widget_purchase_button_text }}"
    data-image="{{ '/public/img/icons-touch/apple-touch-icon.png' }}">
  </script>
  --}}

{!! Form::close() !!}