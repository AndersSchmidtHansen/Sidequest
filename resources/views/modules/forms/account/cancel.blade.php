{!! Form::open(['url' => '/subscription/cancel']) !!}
  <h4>Cancel your account</h4>
  <p>Not what you expected? That's okay, you can easily cancel your account here.</p>
  <div class="form-group">
    {!! Form::submit('Cancel account now') !!}
  </div>
{!! Form::close() !!}