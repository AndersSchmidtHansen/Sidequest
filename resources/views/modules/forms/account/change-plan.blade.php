{!! Form::open(['url' => '/subscription/swap-plan']) !!}
  <h4>Your plan</h4>
  <p>You are on the <strong>
    @foreach($plans as $plan)
      @if($user->stripe_plan == $plan->plan_id) 
        {{ $plan->name }} 
      @endif
    @endforeach
  </strong> plan.</p>
  
  <label>
    <div>Change your plan</div>
    <select name="plan_to_swap_to" id="plan_to_swap_to">
      @foreach($plans as $plan)
        <option value="{{ $plan->plan_id }}" @if($user->stripe_plan == $plan->plan_id) selected @endif >{{ $plan->name }}</option>
      @endforeach
    </select>
    
  </label>

  <div class="form-group">
    {!! Form::submit('Upgrade') !!}
  </div>
{!! Form::close() !!}