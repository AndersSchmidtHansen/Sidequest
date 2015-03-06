<!doctype html>
<html lang="en" role="document">

  @include('base.head')
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <body class="page page--admin clearfix">
      
      <aside class="sidebar full-height top-layer text-center">
        <nav role="navigation">

          {!! Html::navItem('/admin', 'Settings', 'cog') !!}
          {!! Html::navItem('/admin/users', 'Users', 'users') !!}
          {!! Html::navItem('/admin/plans', 'Plans', 'birthday-cake') !!}
          {!! Html::navItem('/admin/developer-zone', 'Developer Zone', 'code') !!}
          {!! Html::navItem('/auth/logout', 'Sign out', 'sign-out', 'bottom') !!}

        </nav>
      </aside>

      <header class="header">
        <h1 class="header__title">{{ $title }}</h1>
      </header>

      <main>
      @yield('content')
      </main>
   
    @include('base.scripts')
    <script src="/js/admin/admin.js"></script>

  </body>
</html>
