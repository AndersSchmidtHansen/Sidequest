@include('errors.check')

<form class="form-horizontal" role="form" method="POST" action="/user/upgrade">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <button type="submit">Upgrade</button>

</form>