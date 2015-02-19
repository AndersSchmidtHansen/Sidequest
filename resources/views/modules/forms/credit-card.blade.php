<div class="payment-errors"></div>

<div class="form-group">
  <label>
    <div>Card Number</div>
    <input type="text" size="20" data-stripe="number" />
  </label>
</div>

<div class="form-group">
  <label>
    <div>CVC</div>
    <input type="text" size="4" data-stripe="cvc" />
  </label>
</div>

{!! Form::selectMonth('exp_month', null, ['data-stripe' => 'exp-month']) !!}
{!! Form::selectRange('exp_year', 2015, 2030, null, ['data-stripe' => 'exp-year']) !!}