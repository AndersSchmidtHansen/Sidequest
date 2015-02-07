@extends('app')

@section('content')

@include('modules.forms.upgrade')

@if( Auth::user()->subscribed() )
You are PRO, congrats
@endif


<a href="/auth/logout">Sign Out</a>
@endsection
