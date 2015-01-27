@include('errors.check')

<form class="form-horizontal" role="form" method="POST" action="/auth/login">
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
    <div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Remember Me
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div>
      <button type="submit">Login</button>

      <a href="/password/email">Forgot Your Password?</a>
    </div>
  </div>
</form>