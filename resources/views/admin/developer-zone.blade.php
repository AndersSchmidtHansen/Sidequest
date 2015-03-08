@extends('admin.layout')

@section('content')
  
  @if( config('bugsnag.api_key') != '' )
  <p><strong>Note: </strong>Production & Staging error handling is set up at <a href="{{ url('https://bugsnag.com/') }}">Bugsnag</a>.</p>
  @else
  <p>You haven't yet set up your <a href="{{ url('https://bugsnag.com/') }}">Bugsnag</a> API key in your .env file. You should go and do that to get some sweet error logging going.</p>
  @endif

  {!! Html::panelOpen('<strong>Log</strong> <span class="text text--faded">(for development environment)</span>', false) !!}
    {!! Html::panelBodyOpen(false) !!}
      <p><a href="{{ url('admin/clear-logs') }}">Clear log</a></p>
      <pre class="logger scrollable" data-max-height="450">@foreach( $logs as $log => $line )<div class="logger__line"><strong class="logger__line-number">{{ $log }}</strong> <span class="logger__message">{{ $line }}</span></div>@endforeach</pre>

    {!! Html::panelBodyClose(false) !!}
  {!! Html::panelClose() !!}

@endsection