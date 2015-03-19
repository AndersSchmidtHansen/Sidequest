{!! Html::accordionOpen('API Keys', false, 'key') !!}

  {!! Form::textField('service_stripe_api_key_publishable', 'Stripe API Key (Publishable)', $settings->service_stripe_api_key_publishable, ['class' => 'form-control'], 'Don\'t forget to set your secret Stripe key in the .env file as well.') !!}
  {!! Form::textField('service_google_analytics_api_key', 'Google Analytics API Key', $settings->service_google_analytics_api_key, ['class' => 'form-control', 'placeholder' => 'UA-XXXX-XX']) !!}
  {!! Form::textField('service_google_site_verification_key', 'Google Site Verification Key', $settings->service_google_site_verification_key, ['class' => 'form-control']) !!}
  {!! Form::textField('service_heap_analytics_api_key', 'Heap Analytics API Key', $settings->service_heap_analytics_api_key, ['class' => 'form-control']) !!}
  {!! Form::textField('service_olark_api_key', 'Olark API Key', $settings->service_olark_api_key, ['class' => 'form-control']) !!}
  {!! Form::textField('service_keen_io_project_id', 'Keen.io Project ID', $settings->service_keen_io_project_id, ['class' => 'form-control']) !!}
  {!! Form::textField('service_keen_io_read_key', 'Keen.io Read Key', $settings->service_keen_io_read_key, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}