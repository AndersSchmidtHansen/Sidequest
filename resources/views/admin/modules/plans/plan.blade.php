{!! Html::panelOpen("<strong>".$plan->name."</strong>", false) !!}
  {!! Html::panelBodyOpen(false) !!}
    
    {!! Form::open(['url' => '/admin/update-cached-plan/'.$plan->id]) !!}
      <div class="form-group">
        <strong>Price</strong>
        <span class="pull-right">{{ number_format($plan->amount / 100, 2) }} {{ strtoupper($plan->currency) }}</span>
      </div>

      <div class="form-group">
        <strong>Interval</strong>
        <span class="pull-right">{{ $plan->interval }}</span>
      </div> 
    
      <hr>
      <div class="form-group">
        <label for="plan_description">Description</label>
        <textarea name="plan_description" id="plan_description" placeholder="Short, easy for anyone to understand..." class="form-control" rows="3">{{ $plan->description }}</textarea>
      </div>

      <div class="form-group">
        <label for="plan_features">Features</label>
        <textarea name="plan_features" id="plan_features" placeholder="Comma-separated, supports basic HTML" class="form-control" rows="3">{{ $plan->features }}</textarea>
      </div>

      <button class="btn btn-sm btn-block btn-success"><strong>Update</strong></button>
      <hr>
    {!! Form::close() !!}

    {!! Form::open(['url' => '/admin/delete-cached-plan/'.$plan->id]) !!}
      <button class="btn btn-xs btn-block btn-danger">Delete plan from cache</button>
    {!! Form::close() !!}

  {!! Html::panelBodyClose(false) !!}
{!! Html::panelClose() !!}