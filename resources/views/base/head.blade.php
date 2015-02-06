<head>
  <title>{{ $title or $app_settings->name }} @if( isset($title) )— {{ $app_settings->name }} @endif</title>
  @include('base.meta')

  <link href="/css/app.css" rel="stylesheet">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'>

</head>