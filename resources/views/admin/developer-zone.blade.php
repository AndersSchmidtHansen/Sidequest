@extends('admin.layout')

@section('content')

  {!! Html::panelOpen('<strong>Log</strong>', false) !!}
    {!! Html::panelBodyOpen(false) !!}
      <p><a href="./clear-logs">Clear log</a></p>
      <pre class="logger scrollable" data-max-height="450">@foreach( $logs as $log => $line )<div class="logger__line"><strong class="logger__line-number">{{ $log }}</strong> <span class="logger__message">{{ $line }}</span></div>@endforeach</pre>

    {!! Html::panelBodyClose(false) !!}
  {!! Html::panelClose() !!}

@endsection