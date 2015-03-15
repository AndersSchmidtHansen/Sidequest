{!! Html::accordionOpen('Company Details', false, 'building') !!}

  <div class="form-group">
  {!! Form::label('company_logo','Company Logo (.SVG)') !!}
  {!! Html::fileExists('img/company_logo.svg') !!}
  {!! Form::file('company_logo', ['accept' => 'image/svg']) !!}
  </div>

  {!! Form::textField('company_address', 'Company Address', $settings->company_address, ['class' => 'form-control']) !!}
  {!! Form::textField('customer_support_email', 'Customer Support Email', $settings->customer_support_email, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}