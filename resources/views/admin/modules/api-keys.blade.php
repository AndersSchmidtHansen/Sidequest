{!! Html::accordionOpen('API Keys', false, 'key') !!}

  {!! Form::textField('service_stripe_api_key_publishable', 'Stripe API Key (Publishable)', null, ['class' => 'form-control'], 'Don\'t forget to set your secret Stripe key in the .env file as well.') !!}
  {!! Form::textField('service_google_analytics_api_key', 'Google Analytics API Key', null, ['class' => 'form-control', 'placeholder' => 'UA-XXXX-XX']) !!}
  {!! Form::textField('service_google_site_verification_key', 'Google Site Verification Key', null, ['class' => 'form-control']) !!}
  {!! Form::textField('service_heap_analytics_api_key', 'Heap Analytics API Key', null, ['class' => 'form-control']) !!}
  {!! Form::textField('service_olark_api_key', 'Olark API Key', null, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}