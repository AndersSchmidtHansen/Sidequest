{!! Html::accordionOpen('Terms Of Use', false, 'legal') !!}

  <textarea 
    name="legal_terms_of_use" 
    id="legal_terms_of_use" 
    cols="30" 
    rows="10" 
    class="form-control">
    @if( $app_settings->legal_terms_of_use == '' )
      @include('texts.terms-of-use')
    @else
      {!! $app_settings->legal_terms_of_use !!}
    @endif
  </textarea>

{!! Html::accordionClose() !!}