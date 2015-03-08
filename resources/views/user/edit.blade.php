@extends('app')

@section('content')

User Settings <br>
Update or delete your {{ $app_settings->name or '' }} account.

{!! Form::open(['url' => 'home/your/update-password', 'role' => 'ajax-form', 'data-waiting-message' => 'Changing password...', 'data-success-message' => 'Password updated!']) !!}
  


  <button role="submit">Change password</button>
{!! Form::close() !!}

@endsection

@section('additional-scripts')
 @include('utilities.ajax-form')
@endsection