<nav role="navigation">

  @if( Request::is('home', 'home/*') )
    <a href="{{ url('/') }}" class="logo">
      @include('modules.logo')
    </a>
    <strong>{{ Auth::user()->name }} ▾</strong>
    <a href="#">Help</a>
    <a href="{{ url('/auth/logout') }}">Sign Out</a>
  @else
    <a href="/" class="logo">
      @include('modules.logo')
    </a>
    <a href="{{ url('/pricing') }}">Pricing</a>
    <a href="#">Support & Docs ▾</a>

    @if( Auth::guest() )
    <a href="#">Get started</a>
    <a href="{{ url('/auth/login') }}">Sign In</a>
    @elseif( Auth::check() )
    <a href="{{ url('/home') }}">Dashboard</a>
    <a href="{{ url('/auth/logout') }}">Sign Out</a>
    @endif
    
  @endif

  @if( Auth::check() and Auth::user()->isAdmin() )
  <a href="{{ url('/admin') }}">Admin</a>
  @endif
  

</nav>