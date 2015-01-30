@extends('emails.layout')

@section('title')
Forgot your password, eh?
@endsection

@section('content')
<p>No worries, click the button below to reset your password.
<br><br>
<a href="{{ url('password/reset/'.$token) }}" style="padding:10px;border:2px solid;font-weight:bold; display:inline-block;text-decoration:none;">Reset my password</a>
</p>
@endsection
