@extends('admin.layout')

@section('content')
  
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        {!! Form::model($settings, ['url' => 'admin/update-settings', 'files' => true]) !!}
            {!! Html::panelOpen('<strong>Application Settings</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                    @include('admin.modules.general-settings')
                    @include('admin.modules.api-keys')
                    @include('admin.modules.company-details')
                    
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}
      </div>
      <div class="col-md-6">
        {!! Form::model($settings, ['url' => 'admin/update-settings', 'files' => true]) !!}
            {!! Html::panelOpen('<strong>Social & Mobile Settings</strong>') !!}
              {!! Html::panelBodyOpen() !!}

                    @include('admin.modules.social-media-connections')
                    @include('admin.modules.web-app-enhancements')
                    
              {!! Html::panelBodyClose() !!}
            {!! Html::panelClose() !!}
        {!! Form::close() !!}
      </div>
</div>


  {!! Form::model($settings, ['url' => 'admin/update-settings']) !!}
      
      {!! Html::panelOpen('<strong>Legal Mumbo Jumbo</strong>') !!}
        {!! Html::panelBodyOpen() !!}

          @include('admin.modules.terms-of-use')
          @include('admin.modules.privacy-policy')
              
        {!! Html::panelBodyClose() !!}
      {!! Html::panelClose() !!}
  {!! Form::close() !!}  

@endsection