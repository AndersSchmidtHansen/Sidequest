<div class="u-center-vertically">
  <div class="panel panel-default panel-slim center-block">
    <div class="panel-heading text-center"><strong>Welcome back!</strong></div>
    <div class="panel-body">
      
      @include('errors.check')
      
      {!! Form::open(['url' => '/auth/login', 'role' => 'form']) !!}
      
        <div class="form-group">
          <label for="email" class="hidden">Email</label>
          <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="off">
        </div>

        <div class="form-group">
          <label for="password" class="hidden">Password</label>
          <input type="password" class="form-control input-lg" name="password" placeholder="Password" autocomplete="off">
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              <label>
                <input type="checkbox" name="remember"> <small>Remember me</small>
              </label>
            </div>
            <div class="col-sm-6">
              <a href="/password/email"><small>Forgot your password?</small></a>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-default btn-block btn-primary btn-lg"><small>Sign in to your account</small></button>

      {!! Form::close() !!}
    
    </div>
  </div>

  <div class="panel panel-default panel-slim center-block">
    <div class="panel-body text-center">
      Don't have an account? <a href="/auth/register">Sign up</a>.
    </div>
  </div>
</div>