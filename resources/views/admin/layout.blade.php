<!doctype html>
<html lang="en">

  @include('base.head')

  <body>
    
    <aside>
      Sidebar
    </aside>

    <main>
    @yield('content')
    </main>

    @include('base.footer')
    @include('base.scripts')
    <script src="/js/admin/admin.js"></script>

  </body>
</html>
