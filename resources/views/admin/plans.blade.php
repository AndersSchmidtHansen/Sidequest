@extends('admin.layout')

@section('content')

  @if( count($plans) )
    <p>Changed something else than description and features? <a href="{{ url('admin/import-subscription-plans') }}">Re-import now</a>.</p>
    <div class="row">
    @foreach( $plans as $plan )
      <div class="col-sm-4">
      @include('admin.modules.plans.plan')
      </div>
    @endforeach
    </div>
  @else

    @if( env('SERVICE_STRIPE_SECRET_API_KEY') == null )
    <p>You haven't set your <strong>secret Stripe API key</strong> yet... Open you <em>.env</em> file and set it first.</p>
    @else
    <p>You haven't imported your Stripe plans yet... <a href="{{ url('admin/import-subscription-plans') }}">Import now</a>.</p>    
    @endif
    
  @endif

@endsection