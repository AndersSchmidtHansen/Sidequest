<div class="navbar-header">
  <a href="{{ url('../') }}" class="navbar-brand">
    @include('modules.logo')
  </a>
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sq-global-navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>  
</div>

<nav class="collapse navbar-collapse sq-global-navbar-collapse" role="navigation">
  
  <ul class="nav navbar-nav">
    @if( Request::is('home', 'home/*') )
      {!! Html::navbarItem('', Auth::user()->name) !!}
      {!! Html::navbarItem('home/your/settings', 'Settings') !!}
    @else
      {!! Html::navbarItem('pricing', 'Pricing') !!}
      {!! Html::navbarItem('', 'Docs') !!}

      @if( Auth::guest() )
        {!! Html::navbarItem('', 'Get Started') !!}
      @elseif( Auth::check() )
        {!! Html::navbarItem('home', 'Dashboard') !!}
      @endif
    @endif

    @if( Auth::check() and Auth::user()->isAdmin() )
      {!! Html::navbarItem('admin', 'Admin') !!}
    @endif
  </ul>

  <ul class="nav navbar-nav navbar-right">
    @if( Auth::guest() )
      {!! Html::navbarItem('auth/login', 'Sign in') !!}
    @else
      {!! Html::navbarItem('auth/logout', 'Sign out') !!}
    @endif
  </ul>
  
</nav>