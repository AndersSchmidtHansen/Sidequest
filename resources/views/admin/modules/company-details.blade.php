{!! Html::accordionOpen('Company Details', false, 'building') !!}
  
  {!! Form::textField('company_address', 'Company Address', null, ['class' => 'form-control']) !!}
  {!! Form::textField('customer_support_email', 'Customer Support Email', null, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}