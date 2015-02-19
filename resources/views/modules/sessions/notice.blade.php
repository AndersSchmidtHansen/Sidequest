@if(Session::has('notice'))
  {{ Session::get('notice') }}
@endif