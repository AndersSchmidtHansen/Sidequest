@extends('admin.layout')

@section('content')

  <h1>{{ $title }}</h1>

  @if( count($plans) )
    @foreach( $plans as $plan )
      <h4>{{ $plan->name }}</h4>
      <p>{{ $plan->amount }}</p> 
    @endforeach
  @else
    <p>You haven't imported your Stripe plans yet... <a href="./import-subscription-plans">Import now</a>.</p>
  @endif

@endsection