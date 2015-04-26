@include('errors.check')

<div class="panel panel-default panel-slim center-block u-center-vertically">
  <div class="panel-heading text-center"><strong>Create your {{ $app_settings->name }} account.</strong></div>
  <div class="panel-body">

{!! Form::open(['url' => '/auth/register', 'role' => 'form']) !!}

  <div class="form-group">
    <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="Email">
  </div>

  <div class="form-group">
    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <input type="password" class="form-control input-lg" name="password_confirmation" placeholder="Confirm password">
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-block btn-default btn-primary btn-lg"><small>Create your {{ $app_settings->name }} account</small></button>
  </div>
  
  <div class="text-center">
    <small>By signing up you agree to our <a href="/terms-of-use">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</small>
  </div>

{!! Form::close() !!}

  </div>
</div>