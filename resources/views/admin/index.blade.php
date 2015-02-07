@extends('admin.layout')

@section('content')
  {!! Form::model($settings, ['url' => 'admin/update-settings', 'files' => true]) !!}
      
      {!! Html::panelOpen('Application Settings') !!}
        {!! Html::panelBodyOpen() !!}

          <div class="panel-group">

            {!! Html::accordionOpen('General Settings', false, 'wrench') !!}
              {!! Form::textField('name', 'Application Name', null, ['class' => 'form-control']) !!}

              <div class="form-group">
              {!! Form::label('application_shortcut_icon_196x196','Shortcut Icon (196x196)') !!}
              {!! Form::file('application_shortcut_icon_196x196') !!}
              </div>

              <div class="form-group">
              {!! Form::label('application_favicon_ico_32x32','Favicon .ICO (32x32)') !!}
              {!! Form::file('application_favicon_ico_32x32') !!}
              </div>   

              <div class="form-group">
              {!! Form::label('application_favicon_png_32x32','Favicon .PNG (32x32)') !!}
              {!! Form::file('application_favicon_png_32x32') !!}
              </div>              

            {!! Html::accordionClose() !!}

            {!! Html::accordionOpen('API Keys', false, 'key') !!}

              {!! Form::textField('service_stripe_api_key_publishable', 'Stripe API Key (Publishable)', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_google_analytics_api_key', 'Google Analytics API Key', null, ['class' => 'form-control', 'placeholder' => 'UA-XXXX-XX']) !!}
              {!! Form::textField('service_google_site_verification_key', 'Google Site Verification Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_heap_analytics_api_key', 'Heap Analytics API Key', null, ['class' => 'form-control']) !!}
              {!! Form::textField('service_olark_api_key', 'Olark API Key', null, ['class' => 'form-control']) !!}

            {!! Html::accordionClose() !!}


            {!! Html::accordionOpen('Web App Enhancements', false, 'tablet') !!}
              
              <p>It is possible to make your application behave much like a native app, simply by uploading a few, specific images below. Remember to upload the images in the correct sizes shown in the headlines. If the images are correct when a user uses the "Add to Homescreen" function on an iOS device, they will be delivered a more native app experience.</p>

              <div class="form-group">
              {!! Form::label('apple_touch_icon_152x152','Apple Touch Icon (152x152)') !!}
              {!! Form::file('apple_touch_icon_152x152') !!}
              </div>

              <div class="form-group">
              {!! Form::label('apple_touch_startup_image_640x920','Apple Startup Image (640x920)') !!}
              {!! Form::file('apple_touch_startup_image_640x920') !!}
              </div>

              <div class="form-group">
              {!! Form::label('apple_touch_startup_image_640x1096','Apple Startup Image (640x1096)') !!}
              {!! Form::file('apple_touch_startup_image_640x1096') !!}
              </div>

              <div class="form-group">
              {!! Form::label('apple_touch_startup_image_750x1334','Apple Startup Image (750x1334)') !!}
              {!! Form::file('apple_touch_startup_image_750x1334') !!}
              </div>

              <div class="form-group">
              {!! Form::label('apple_touch_startup_image_1242x2208','Apple Startup Image (1242x2208)') !!}
              {!! Form::file('apple_touch_startup_image_1242x2208') !!}
              </div>

              <div class="form-group">
              {!! Form::label('apple_touch_startup_image_1536x2008','Apple Startup Image (1536x2008)') !!}
              {!! Form::file('apple_touch_startup_image_1536x2008') !!}
              </div>                            

            {!! Html::accordionClose() !!}

            {!! Html::accordionOpen('Social Media Connections', false, 'share-alt') !!}

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