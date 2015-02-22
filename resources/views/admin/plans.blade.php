@extends('admin.layout')

@section('content')

  <h1>{{ $title }}</h1>

  @if( count($plans) )
    <p>Changed something else than description and features? <a href="./import-subscription-plans">Re-import now</a>.</p>
    <div class="row">
    @foreach( $plans as $plan )
      <div class="col-sm-4">
      @include('admin.modules.plans.plan')
      </div>
    @endforeach
    </div>
  @else
    <p>You haven't imported your Stripe plans yet... <a href="./import-subscription-plans">Import now</a>.</p>
  @endif

@endsection