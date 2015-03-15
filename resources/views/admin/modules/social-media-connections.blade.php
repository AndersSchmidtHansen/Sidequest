{!! Html::accordionOpen('Social Media Connections', false, 'share-alt') !!}

  {!! Form::textField('social_facebook_app_id', 'Facebook App ID', $settings->social_facebook_app_id, ['class' => 'form-control']) !!}
  {!! Form::textField('social_twitter_app_id', 'Twitter App ID', $settings->social_twitter_app_id, ['class' => 'form-control']) !!}
  {!! Form::textField('social_twitter_handle', 'Twitter Handle', $settings->social_twitter_handle, ['class' => 'form-control', 'placeholder' => '@sidequest']) !!}
  {!! Form::textField('social_google_plus_id', 'Google Plus ID', $settings->social_google_plus_id, ['class' => 'form-control']) !!}
  {!! Form::textField('social_google_play_app_id', 'Google Play App ID', $settings->social_google_play_app_id, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}