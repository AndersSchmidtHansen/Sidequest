@extends('admin.layout')

@section('content')

  <h1>{{ $title }}</h1>

  {!! Html::panelOpen('<strong>Log</strong>', false) !!}
    {!! Html::panelBodyOpen(false) !!}
      
      <pre><a href="./clear-logs">Clear</a>@foreach( $logs as $log => $line )<strong>{{ $log }}</strong>: {{ $line }}@endforeach</pre>

    {!! Html::panelBodyClose(false) !!}
  {!! Html::panelClose() !!}

@endsection