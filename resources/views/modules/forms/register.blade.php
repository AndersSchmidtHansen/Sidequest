@include('errors.check')

<form class="form-horizontal" role="form" method="POST" action="/auth/register">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label>Name</label>
    <div>
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
  </div>

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

  <small>By signing up you agree to our <a href="/terms-of-use">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</small>
</form>
