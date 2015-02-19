@extends('app')

@section('content')

@if( $user->subscribed() )
  <p>You are subscribed.</p>

  @if( $user->cancelled() )
    <p>You subscription will end on {{ $user->subscription_ends_at->format('D d M Y') }}.</p>
    @include('modules.forms.account.resume')
  @else
    @include('modules.forms.account.cancel')
  @endif

  @include('modules.forms.account.change-plan')
  @include('modules.forms.account.update-credit-card')

@else
  <p>Looks like you're not subscribed. Why not join now?</p>
  @include('modules.forms.join')
@endif


<a href="/auth/logout">Sign Out</a>
@endsection

@section('additional-scripts')
 @include('services.stripe')
@endsection
