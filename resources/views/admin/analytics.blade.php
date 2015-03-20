@extends('admin.layout')

@section('content')
  
  <div class="row">
    @include(
      'admin.modules.analytics.widget', [
      'widget' => 'new-paying-customers', 
      'title' => 'New Paying Customers (Last 2 months)'
    ])  
    @include(
      'admin.modules.analytics.widget', [
      'widget' => 'revenue-over-time',
      'title' => 'Revenue over time (Last 2 months)'
    ])
  </div>

  <div class="row">
    @include(
      'admin.modules.analytics.widget', [
      'widget' => 'todays-revenue',
      'title' => 'Todays\' revenue',
      'col' => '4'
    ])
    @include(
      'admin.modules.analytics.widget', [
      'widget' => 'last-months-revenue',
      'title' => 'Last 30 days\' revenue',
      'col' => '4'
    ])

    @include(
      'admin.modules.analytics.widget', [
      'widget' => 'growth-rate',
      'title' => 'Weekly Revenue Growth rate',
      'col' => '4'
    ])
  </div>

@endsection

@section('keen')
@if( isset($settings) and $settings->service_keen_io_project_id and $settings->service_keen_io_read_key )
<script>
  
  var client = new Keen({
    projectId: "{{ $service_keen_io_project_id or '550aad9959949a13d1afbe2a' }}",
    readKey: "{{ $service_keen_io_read_key or '49ae6b58db153d957f65c10a1371eb7afaa446c541fcce6a178fdaf09b55843eecf1a8a6fd09fcab2bc502c6b0f0bf9b4637371f8518ebe428e3a06d6328fe1a54b0d7794d48d5fe0fb8962c4900aefa33ad88a38a168ede96104f586a4e3ff7d4fa8feef0a5478c43a87942ba040930' }}"
  });

</script>
@endif
@endsection