@extends('app')

@section('content')
  <h1>{{ $title }}</h1>
  <article>
    <div>
    @if( $app_settings->legal_terms_of_use == '' )
      @include('texts.terms-of-use')
    @else
      {!! $app_settings->legal_terms_of_use !!}
    @endif
    </div>                                   
  </article>      
@endsection
