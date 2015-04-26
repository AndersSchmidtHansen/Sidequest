<head>
  <title>
    @yield('page-title')
    @if( isset($app_settings->name)) {{ $title or $app_settings->name }} @endif
    @if( isset($title) )| {{ $app_settings->name or '' }} @endif
  </title>
  @include('base.meta')

  <link href="/css/app.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/vendor.css') }}">

  <!-- Fonts -->
  
</head>