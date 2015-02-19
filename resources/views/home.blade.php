@extends('app')

@section('content')

@if( $user->subscribed() )
  <p>You are subscribed, thanks!</p>
  @include('modules.forms.account')
@else
  <p>Looks like you're not subscribed. Why not join now?</p>
  @include('modules.forms.join')
@endif


<a href="/auth/logout">Sign Out</a>
@endsection
