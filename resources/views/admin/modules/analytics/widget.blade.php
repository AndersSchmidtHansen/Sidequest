<div class="col-sm-{{ $col or '6' }}">
{!! Html::panelOpen("<strong>".$title."</strong>", false) !!}
  {!! Html::panelBodyOpen(false) !!}
  @if(isset($widget))
    @include("admin.modules.analytics.$widget")
  @endif
  {!! Html::panelBodyClose(false) !!}
{!! Html::panelClose() !!}
</div>