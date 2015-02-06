<!doctype html>
<html lang="en">

  @include('base.head')
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <body class="page page--admin clearfix">
    
      <aside class="sidebar full-height top-layer text-center">
        <nav>
          <a href="/admin" class="nav__item" rel="tooltip" data-placement="right" title="Settings"><i class="fa fa-cog"></i></a>
          <a href="/admin/users" class="nav__item" rel="tooltip" data-placement="right" title="Users"><i class="fa fa-users"></i></a>
          <a href="#" class="nav__item bottom" rel="tooltip" data-placement="right" title="Sign out"><i class="fa fa-sign-out"></i></a> 
        </nav>
      </aside>

      <main>
      @yield('content')
      </main>
   

    @include('base.footer')
    @include('base.scripts')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/js/admin/admin.js"></script>

  </body>
</html>
