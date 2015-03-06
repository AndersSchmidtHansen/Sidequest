{!! Html::accordionOpen('Privacy Policy', false, 'user-secret') !!}
  
<textarea 
name="legal_privacy_policy" 
id="legal_privacy_policy" 
cols="30" 
rows="10" 
class="form-control">
@if( $app_settings->legal_privacy_policy == '' )
@include('texts.privacy-policy')
@else
{!! $app_settings->legal_privacy_policy !!}
@endif
</textarea>

{!! Html::accordionClose() !!}