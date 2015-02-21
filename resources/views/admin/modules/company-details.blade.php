{!! Html::accordionOpen('Company Details', true, 'building') !!}
  
  <div class="form-group">
  {!! Form::label('company_logo','Company Logo (.SVG)') !!}
  {!! Form::file('company_logo', ['accept' => 'image/svg']) !!}
  </div>

  {!! Form::textField('company_address', 'Company Address', null, ['class' => 'form-control']) !!}
  {!! Form::textField('customer_support_email', 'Customer Support Email', null, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}