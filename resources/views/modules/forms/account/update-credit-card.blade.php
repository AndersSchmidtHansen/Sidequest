<h4>Your card information</h4>
<p>The card we have on file ends with {{ $user->getLastFourCardDigits() }}.</p>
  
{!! Form::open(['url' => '/subscription/update-credit-card']) !!}
  
  @include('modules.forms.credit-card')

  <div class="form-group">
    {!! Form::submit('Update card info') !!}
  </div>
{!! Form::close() !!}