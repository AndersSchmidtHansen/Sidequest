@extends('emails.layout')

@section('title')
{{ $email_title or 'Thanks for choosing ' . $app_settings->name }}
@endsection

@section('content')
<p>Thanks for signing up for {{ $app_settings->name }}. We really appreciate your support and if you need any help getting started, don't hesitate to contact us at <a href="mailto:{{ $app_settings->customer_support_email }}">{{ $app_settings->customer_support_email }}</a>.</p>
@endsection