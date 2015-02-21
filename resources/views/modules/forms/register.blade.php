@include('errors.check')

{!! Form::open(['url' => '/auth/register', 'role' => 'form']) !!}

  <div class="form-group">
    <label>Name
      <div>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
      </div>
    </label>
  </div>

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
    <label>Confirm Password
      <div>
        <input type="password" class="form-control" name="password_confirmation">
      </div>
    </label>
  </div>

  <div class="form-group">
    <div>
      <button type="submit">Register</button>
    </div>
  </div>

  <small>By signing up you agree to our <a href="/terms-of-use">Terms of Use</a> and <a href="/privacy-policy">Privacy Policy</a>.</small>

{!! Form::close() !!}
