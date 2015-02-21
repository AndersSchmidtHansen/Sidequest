<nav role="navigation">

  @if( Request::is('home', 'home/*') )
    <a href="{{ url('/home') }}">Logo</a>
    <strong>{{ Auth::user()->name }} ▾</strong>
    <a href="#">Help</a>
    <a href="{{ url('/auth/logout') }}">Sign Out</a>
  @else
    <a href="/">Logo</a>
    <a href="{{ url('/features') }}">Features</a>
    <a href="{{ url('/pricing') }}">Pricing</a>
    <a href="#">Support & Docs ▾</a>

    @if( Auth::guest() )
    <a href="#">Sign Up Free</a>
    <a href="#">Log In</a>
    @elseif( Auth::check() )
    <a href="{{ url('/home') }}">Dashboard</a>
      @if( Auth::user()->isAdmin() )
      <a href="{{ url('/admin') }}">Admin</a>
      @endif
    @endif

  @endif
</nav>