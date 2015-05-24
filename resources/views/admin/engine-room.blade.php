@extends('admin.layout')

@section('content')

   <div class="row">
      <div class="col-sm-6">

        {{-- Stripe --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Stripe</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                    <p>Stripe is a suite of APIs that powers commerce for businesses of all sizes. Handles user payments and credit cards.</p>

                    {!! Form::textField(
                      'service_stripe_api_key_publishable', 
                      'Publishable API Key', 
                      $settings->service_stripe_api_key_publishable, 
                      ['class' => 'form-control']) 
                    !!}

                    {!! Form::textField(
                      'service_stripe_api_key_secret', 
                      'Secret API Key <span class="text-muted">(set in .env)</span>', 
                      env('SERVICE_STRIPE_SECRET_API_KEY'), 
                      ['class' => 'form-control', 'disabled' => 'disabled']) 
                    !!}                    
                    
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}

        {{-- Google Analytics --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Google Analytics</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                <p>Google Analytics is a freemium web analytics service offered by Google that tracks and reports website traffic.</p>

                {!! Form::textField('service_google_analytics_api_key', 'Tracking ID', $settings->service_google_analytics_api_key, ['class' => 'form-control', 'placeholder' => 'UA-XXXX-XX']) !!}

                {!! Form::textField('service_google_site_verification_key', 'Google Site Verification Key', $settings->service_google_site_verification_key, ['class' => 'form-control']) !!}                                                       

              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}

        {{-- Olark --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Olark</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                <p>Enables live chat customer support on your site.</p>

                {!! Form::textField('service_olark_api_key', 'Olark API Key', $settings->service_olark_api_key, ['class' => 'form-control']) !!}                                                
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}        

      </div>
      <div class="col-sm-6">

        {{-- Mailchimp --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Mailchimp</strong>') !!}
              {!! Html::panelBodyOpen() !!}
                
                <p>MailChimp is an email marketing service provider. After setting the API key and the list ID users will automatically be added to a list upon registration.</p>

                {!! Form::textField(
                  'service_mailchimp_api_key_secret', 
                  'Secret API Key <span class="text-muted">(set in .env)</span>', 
                  env('SERVICE_MAILCHIMP_SECRET_API_KEY'), 
                  ['class' => 'form-control', 'disabled' => 'disabled']) 
                !!}

                {!! Form::textField('mailing_list_id', 'Mailing List ID (<a href="https://polkaspots.zendesk.com/hc/en-us/articles/201070513-Where-can-I-find-my-MailChimp-API-key-and-List-ID" target="_blank">Show me where to find this</a>)', $settings->mailing_list_id, ['class' => 'form-control']) !!}                  
                    
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}

        {{-- Heap Analytics --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Heap Analytics</strong>') !!}
              {!! Html::panelBodyOpen() !!}
                
                <p>Heap allows you to gather more detailed analytics than Google Analytics through a user-friendly interface. Useful to use alongside Google Analytics and not as a replacement.</p>

                {!! Form::textField('service_heap_analytics_api_key', 'App ID', $settings->service_heap_analytics_api_key, ['class' => 'form-control']) !!}
               
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}

        {{-- Keen --}}
        {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
            {!! Html::panelOpen('<strong>Keen</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                <p>Use one powerful analytics API for data collection and analysis. This makes the Analytics page in this admin work.</p>

                {!! Form::textField('service_keen_io_project_id', 'Keen.io Project ID', $settings->service_keen_io_project_id, ['class' => 'form-control']) !!}

                {!! Form::textField('service_keen_io_read_key', 'Keen.io Read Key', $settings->service_keen_io_read_key, ['class' => 'form-control']) !!}                                                
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}         

      </div>
    </div>  

@endsection