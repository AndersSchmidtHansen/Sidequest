@if( count($plans) > 0 )
  @foreach($plans as $plan)
    @include('modules.plans.plan')
  @endforeach
@else
  <p>You haven't imported any plans yet! You can do that from the admin panel.</p>
@endif