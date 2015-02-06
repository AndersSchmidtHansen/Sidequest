@if( Auth::check() )
  Welcome, {{ Auth::user()->email }}
@endif