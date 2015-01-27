<head>
  <title>{{ $title or env('APP_NAME') }} @if( isset($title) )— {{ env('APP_NAME') }} @endif</title>
  @include('base.meta')

  <link href="/css/app.css" rel="stylesheet">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'>

</head>