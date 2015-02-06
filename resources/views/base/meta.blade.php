<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">

@if( $app_settings->service_google_site_verification_key )
<meta name="google-site-verification" content="{{ $app_settings->service_google_site_verification_key }}" />
@endif

{{-- 
|--------------------------------------------------------------------------
| Social Sharing Meta Data
|--------------------------------------------------------------------------
|
| Here we make integrate Facebook's Open Graph API and Twitter's Card
| API to make the application optimized for social sharing. Since
| the order doesn't matter, we can group some stuff together.
| To adjust APP IDs and the like, head to your .env file.
|
--}}

{{-- App IDs --}}
@if( $app_settings->social_facebook_app_id )
<meta property="fb:app_id" content="{{ $app_settings->social_facebook_app_id }}">
@endif
@if( $app_settings->social_twitter_app_id )
<meta name="twitter:app:id:iphone" content="{{ $app_settings->social_twitter_app_id }}">
<meta name="twitter:app:id:ipad" content="{{ $app_settings->social_twitter_app_id }}">
@endif
@if( $app_settings->social_google_play_app_id )
<meta name="twitter:app:id:googleplay" content="{{ $app_settings->social_google_play_app_id }}">
@endif

{{-- App Name --}}
@if( $app_settings->name )
<meta property="og:site_name" content="{{ $app_settings->name }}">
<meta name="twitter:app:name:iphone" content="{{ $app_settings->name }}">
<meta name="twitter:app:name:ipad" content="{{ $app_settings->name }}">
<meta name="twitter:app:name:googleplay" content="{{ $app_settings->name }}">
@endif

{{-- Current Page URL --}}
<meta property="og:url" content="{{ URL::full() }}">
<meta name="twitter:url" content="{{ URL::full() }}">

{{-- Current Page Title --}}
<meta property="og:title" content="{{ $title or $app_settings->name }} @if(isset($title))— {{ $app_settings->name }} @endif">
<meta name="twitter:title" content="{{ $title or $app_settings->name }} @if(isset($title))— {{ $app_settings->name }} @endif">

{{-- Current Page Description --}}
@if( isset($description) )
<meta property="og:description" content="{{ $description }}">
<meta name="description" content="{{ $description }}">
@endif

{{-- Current Page Image --}}
@if(isset($image))
<meta property="og:image" content="{{ $image }}">
<meta name="twitter:image:src" content="{{ $image }}">
<link rel="image_src" href="{{ $image }}">
@endif

{{-- Misc. --}}
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:site" content="{{ $app_settings->social_twitter_handle }}">


{{-- 
|--------------------------------------------------------------------------
| Mobile App Enabling
|--------------------------------------------------------------------------
|
| With only a few extra files it is possible to make your application
| mobile app enabled. This allows your users to add the site to
| their homescreens, much like a natively installed app.
|
--}}

{{-- Base Setup --}}
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="{{ $app_settings->name }}">

{{-- Apple Touch Images for iOS --}}
<link rel="apple-touch-icon" 
      sizes="152x152" href="{{ asset('img/icons-touch/apple-touch-icon.png') }}">

<link href="{{ asset('img/icons-touch/apple-touch-startup-image-640x920.png') }}"
      media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<link href="{{ asset('img/icons-touch/apple-touch-startup-image-640x1096.png') }}"
      media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<link href="{{ asset('img/icons-touch/apple-touch-startup-image-750x1334.png') }}" 
      media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<link href="{{ asset('img/icons-touch/apple-touch-startup-image-1242x2208.png') }}" 
      media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3)"
      rel="apple-touch-startup-image">

<link href="{{ asset('img/icons-touch/apple-touch-startup-image-1536x2008.png') }}"
      media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">                      

{{-- Shortcut Icons --}}
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icons-touch/shortcut-icon.ico') }}">
<link rel="shortcut icon" href="{{ asset('img/icons-touch/shortcut-icon.png') }}">
<link rel="shortcut icon" sizes="196x196" href="{{ asset('img/icons-touch/shortcut-icon-196x196.png') }}">

<style>html { -webkit-text-size-adjust: 100%; }</style>