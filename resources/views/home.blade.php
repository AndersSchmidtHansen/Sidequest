@extends('app')

@section('content')

@if( Auth::user()->subscribed() )
  You are PRO, congrats

  <h4>Your plan</h4>
  <h4>Your invoices</h4>
  <h4>Your card information</h4>
  <h4>Downgrade your account</h4>
@else
  @include('modules.forms.upgrade')
@endif


<a href="/auth/logout">Sign Out</a>
@endsection
