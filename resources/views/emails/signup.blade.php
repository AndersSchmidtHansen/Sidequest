@extends('emails.layout')

@section('title')
{{ $email_title or 'Email Headline Missing' }}
@endsection

@section('content')
<p>Thanks for signing up for {{ env('APP_NAME') }}. We really appreciate your support and if you need any help getting started, don't hesitate to contact us at <a href="mailto:{{ env('APP_COMPANY_CUSTOMER_SUPPORT_EMAIL') }}">{{ env('APP_COMPANY_CUSTOMER_SUPPORT_EMAIL') }}</a>.</p>
@endsection