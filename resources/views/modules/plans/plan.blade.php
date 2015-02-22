<div class="plan">
  <h4>{{ $plan->name }}</h4>
  <div class="plan__price">
    {{ number_format($plan->amount / 100, 2) }} {{ strtoupper($plan->currency) }}
    <small class="per">
    / {{ $plan->interval }}  
    </small>
    
    @if( $plan->description !== "" )
      <p class="plan__description">{!! $plan->description !!}</p>
    @endif 
    
    @if( $plan->features !== "" )
      <ul class="plan__features">
          @foreach( explode(',', $plan->features) as $feature )
            <li>{!! $feature !!}</li>
          @endforeach
      </ul>
    @endif

  </div>
</div>