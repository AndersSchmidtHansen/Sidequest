{!! Html::panelOpen("<strong>".$plan->name."</strong>") !!}
  {!! Html::panelBodyOpen() !!}
    
    <div class="form-group">
      <strong>Price</strong>
      <span class="pull-right">{{ $plan->amount }} {{ strtoupper($plan->currency) }}</span>
    </div>

    <div class="form-group">
      <strong>Interval</strong>
      <span class="pull-right">{{ $plan->interval }}</span>
    </div>    
  
    <hr>
    <div class="form-group">
      <strong>Description</strong>
      <textarea name="" id="" class="form-control">{{ $plan->description }}</textarea>
    </div>

    {!! Form::open(['url' => '/admin/delete-plan/'.$plan->id]) !!}
      <button class="btn btn-danger">Delete this plan</button>
    {!! Form::close() !!}

  {!! Html::panelBodyClose() !!}
{!! Html::panelClose() !!}