@extends('app')

@section('content')
  @foreach($plans as $plan)
    @include('modules.plans.plan')
  @endforeach
@endsection