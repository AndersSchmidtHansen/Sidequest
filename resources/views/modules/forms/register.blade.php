<div>Register</div>

@include('errors.check')

<form class="form-horizontal" role="form" method="POST" action="/auth/register">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label>E-Mail Address</label>
    <div>
      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
  </div>

  <div class="form-group">
    <label>Password</label>
    <div>
      <input type="password" class="form-control" name="password">
    </div>
  </div>

  <div class="form-group">
    <label>Confirm Password</label>
    <div>
      <input type="password" class="form-control" name="password_confirmation">
    </div>
  </div>

  <div class="form-group">
    <div>
      <button type="submit">Register</button>
    </div>
  </div>
</form>
