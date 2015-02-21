@include('errors.check')

{!! Form::open(['url' => '/auth/login', 'role' => 'form']) !!}
  <div class="form-group">
    <label>E-Mail Address
      <div>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
      </div>
    </label>
  </div>

  <div class="form-group">
    <label>Password
      <div>
        <input type="password" class="form-control" name="password">
      </div>
    </label>
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
{!! Form::close() !!}