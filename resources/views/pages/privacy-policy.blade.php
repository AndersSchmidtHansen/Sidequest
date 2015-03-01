@extends('app')

@section('content')
<h1>{{ $title }}</h1>
  <article>
    <div>
    @if( $app_settings->legal_privacy_policy == '' )
      @include('texts.privacy-policy')
    @else
      {!! $app_settings->legal_privacy_policy !!}
    @endif
    </div>                                       
  </article>      
@endsection
