@if( Auth::guest() && Cookie::get('hasSeenCookieNotice') == false )
<span>{{ $app_settings->name }} uses cookies to give you the best possible experience when visiting our site. By continued use of our service, we assume that you accept our use of cookies. <a href="/privacy-policy">Read more</a></span>

<a href="">Ok</a>
@endif