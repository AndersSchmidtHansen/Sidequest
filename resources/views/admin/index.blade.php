@extends('admin.layout')

@section('content')
  {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
      
      {!! Html::panelOpen('Application Settings') !!}
        {!! Html::panelBodyOpen() !!}

          <div class="panel-group">

            {!! Html::accordionOpen('General Settings', false, 'wrench') !!}
              {!! Form::textField('name', 'Application Name', null, ['class' => 'form-control']) !!}
            {!! Html::accordionClose() !!}


            {!! Html::accordionOpen('API Keys', false, 'key') !!}

              {!! Form::textField('service_mailgun_api_key', 'Mailgun API Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_mandrill_api_key', 'Mandrill API Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_stripe_api_key', 'Stripe API Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_google_analytics_api_key', 'Google Analytics API Key', null, ['class' => 'form-control', 'placeholder' => 'UA-XXXX-XX']) !!}
              {!! Form::textField('service_google_site_verification_key', 'Google Site Verification Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_heap_analytics_api_key', 'Heap Analytics API Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_olark_api_key', 'Olark API Key', null, ['class' => 'form-control']) !!}


            {!! Html::accordionClose() !!}


            {!! Html::accordionOpen('Notifications & Email', false, 'bell') !!}
              
              {!! Form::textField('email_global_from_name', 'Global From Name', null, ['class' => 'form-control', 'placeholder' => 'Hiro Heroic']) !!}
              {!! Form::textField('email_global_from_address', 'Global From Address', null, ['class' => 'form-control', 'placeholder' => 'hero@sidequest.io']) !!}
              {!! Form::textField('email_server_username', 'Email Server Username', null, ['class' => 'form-control']) !!}  
              {!! Form::passwordField('email_server_password', 'Email Server Password', null, ['class' => 'form-control']) !!}  

            {!! Html::accordionClose() !!}


            {!! Html::accordionOpen('Social Media Connections', true, 'share-alt') !!}

              {!! Form::textField('social_facebook_app_id', 'Facebook App ID', null, ['class' => 'form-control']) !!}
              {!! Form::textField('social_twitter_app_id', 'Twitter App ID', null, ['class' => 'form-control']) !!}
              {!! Form::textField('social_twitter_handle', 'Twitter Handle', null, ['class' => 'form-control', 'placeholder' => '@sidequest']) !!}
              {!! Form::textField('social_google_plus_id', 'Google Plus ID', null, ['class' => 'form-control']) !!}
              {!! Form::textField('social_google_play_app_id', 'Google Play App ID', null, ['class' => 'form-control']) !!}


            {!! Html::accordionClose() !!}



            {!! Html::accordionOpen('Company Details', false, 'building') !!}
              
              {!! Form::textField('company_address', 'Company Address', null, ['class' => 'form-control']) !!}
              {!! Form::textField('customer_support_email', 'Customer Support Email', null, ['class' => 'form-control']) !!}

            {!! Html::accordionClose() !!}

          </div>

        {!! Html::panelBodyClose() !!}
      {!! Html::panelClose() !!}

    {!! Form::submit('Update Settings', ['class' => 'btn btn-default btn-success']) !!}
  {!! Form::close() !!}




@endsection