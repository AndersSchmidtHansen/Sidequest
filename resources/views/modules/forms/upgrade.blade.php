<form method="POST" action="/user/upgrade/{{ Auth::user()->id }}">
  
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
 <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button hidden"
    data-key="{{ $app_settings->service_stripe_api_key_publishable }}"
    data-amount="{{ $app_settings->payment_widget_plan_price or '2000' }}"
    data-email="{{ Auth::user()->email }}"
    data-name="{{ $app_settings->payment_widget_company_name or $app_settings->name }}"
    data-label="{{ $app_settings->payment_widget_button_text or 'Upgrade to PRO' }}"
    data-description="{{ $app_settings->payment_widget_description or 'Monthly Subscription ($20.00)' }}"
    data-panel-label="{{ $app_settings->payment_widget_purchase_button_text or 'Upgrade Now ($20.00)' }}"
    data-image="{{ '/public/img/icons-touch/apple-touch-icon.png' }}">
  </script>

</form>