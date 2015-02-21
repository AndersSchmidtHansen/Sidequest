@extends('admin.layout')

@section('content')

  {!! Form::model($settings, ['url' => 'admin/update-settings', 'files' => true]) !!}
      
      {!! Html::panelOpen('Application Settings') !!}
        {!! Html::panelBodyOpen() !!}

              @include('admin.modules.general-settings')
              @include('admin.modules.api-keys')
              @include('admin.modules.web-app-enhancements')
              @include('admin.modules.social-media-connections')
              @include('admin.modules.company-details')
              @include('admin.modules.subscriptions-payment-widget')
              
        {!! Html::panelBodyClose() !!}
      {!! Html::panelClose() !!}
  {!! Form::close() !!}

@endsection