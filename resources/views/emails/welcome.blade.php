@extends('emails.layout')

@section('title')
Thanks for signing up!
@endsection

@section('content')
<p>Thanks for signing up for {{ $app_settings->name or '' }}. We really appreciate your support and if you need any help getting started, don't hesitate to contact us at <a href="mailto:{{ $app_settings->customer_support_email or '' }}">{{ $app_settings->customer_support_email or '' }}</a>.</p>
@endsection