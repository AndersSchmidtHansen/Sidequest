<nav role="navigation">

  @if( Request::is('home', 'home/*') )
    <a href="/" class="logo">
      <img src="/img/company_logo.svg" width="200" alt="{{ $app_settings->name }} Logo" />
    </a>
    <strong>{{ Auth::user()->name }} ▾</strong>
    <a href="#">Help</a>
  @else
    <a href="/" class="logo">
      <img src="/img/company_logo.svg" width="200" alt="{{ $app_settings->name }} Logo" />
    </a>
    <a href="{{ url('/features') }}">Features</a>
    <a href="{{ url('/pricing') }}">Pricing</a>
    <a href="#">Support & Docs ▾</a>

    @if( Auth::guest() )
    <a href="#">Sign Up Free</a>
    <a href="#">Log In</a>
    @elseif( Auth::check() )
    <a href="{{ url('/home') }}">Dashboard</a>
    <a href="{{ url('/auth/logout') }}">Sign Out</a>
    @endif
    
  @endif

  @if( Auth::check() and Auth::user()->isAdmin() )
  <a href="{{ url('/admin') }}">Admin</a>
  @endif
  

</nav>