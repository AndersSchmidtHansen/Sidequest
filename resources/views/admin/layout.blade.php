<!doctype html>
<html lang="en">

  @include('base.head')
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <body class="theme theme--admin">
    
    <aside>
      
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
