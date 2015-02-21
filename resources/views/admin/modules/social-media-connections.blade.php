{!! Html::accordionOpen('Social Media Connections', false, 'share-alt') !!}

  {!! Form::textField('social_facebook_app_id', 'Facebook App ID', null, ['class' => 'form-control']) !!}
  {!! Form::textField('social_twitter_app_id', 'Twitter App ID', null, ['class' => 'form-control']) !!}
  {!! Form::textField('social_twitter_handle', 'Twitter Handle', null, ['class' => 'form-control', 'placeholder' => '@sidequest']) !!}
  {!! Form::textField('social_google_plus_id', 'Google Plus ID', null, ['class' => 'form-control']) !!}
  {!! Form::textField('social_google_play_app_id', 'Google Play App ID', null, ['class' => 'form-control']) !!}

{!! Html::accordionClose() !!}