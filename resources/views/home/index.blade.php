@extends('app')

@section('content')

@if( $user->subscribed() )
  <p>You are subscribed.</p>

  @if( $user->cancelled() )
    <p>You subscription will end on {{ $user->subscription_ends_at->format('D d M Y') }}.</p>
    @include('modules.forms.account.resume')
  @else
    @include('modules.forms.account.change-plan')
    @include('modules.forms.account.update-credit-card')
    @include('modules.forms.account.cancel')
  @endif

@else
  <p>Looks like you're not subscribed. Why not join now?</p>
  @include('modules.forms.join')
@endif

@endsection

@section('additional-scripts')
 @include('services.stripe')
@endsection
