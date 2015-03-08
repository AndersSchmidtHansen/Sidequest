@if(file_exists('/img/company_logo.svg'))
<img src="/img/company_logo.svg" width="200" alt="{{ $app_settings->name or '' }} Logo" />
@else
  {{ $app_settings->name or '' }}
@endif