@extends('admin.layout')

@section('content')

  <h1>{{ $title }}</h1>

  {!! Html::panelOpen('<strong>Log</strong>', false) !!}
    {!! Html::panelBodyOpen(false) !!}
      
      <code>
        
      </code>

    {!! Html::panelBodyClose(false) !!}
  {!! Html::panelClose() !!}

@endsection