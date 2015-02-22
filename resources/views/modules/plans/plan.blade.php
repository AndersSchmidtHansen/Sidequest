<div class="plan">
  <h4>{{ $plan->name }}</h4>
  <div class="plan__price">
    {{ number_format($plan->amount / 100, 2) }} {{ strtoupper($plan->currency) }}
    <small class="per">
    / {{ $plan->interval }}  
    </small>

    <ul class="plan__features">
      @if( $plan->features !== "" )
        @foreach( explode(',', $plan->features) as $feature )
          <li>{{ $feature }}</li>
        @endforeach
      @endif
    </ul>
  </div>
</div>