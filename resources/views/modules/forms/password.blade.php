<div class="u-center-vertically">
  
  <div class="panel panel-default panel-slim center-block">
    <div class="panel-heading text-center"><strong>Reset your password</strong></div>
    
    <div class="panel-body">
      
      <p class="text-center">Enter your email address below and we'll send to a link to reset your password.</p>

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      @include('errors.check')

      <form role="form" method="POST" action="/password/email">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
          <input type="email" class="form-control input-lg" placeholder="Your email" name="email" value="{{ old('email') }}" required>
        </div>

        <button type="submit" class="btn btn-block btn-default btn-primary btn-lg"><small>Send reset password email</small></button>

      </form>
    
    </div>
  </div>

</div>