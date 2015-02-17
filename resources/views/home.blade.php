@extends('app')

@section('content')

@if( $user->stripeIsActive() )
  You are PRO, congrats
  @include('modules.forms.account')
@elseif( $user->stripeIsActive() && $user->cancelled() )
  Even if you cancelled, your PRO account will first expire at {{ $user->getSubscriptionEndDate() }}
@else
  @include('modules.forms.upgrade')
@endif


<a href="/auth/logout">Sign Out</a>
@endsection
