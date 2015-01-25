@extends('app')

@section('content')

<div class="container">
	<div class="content">
		<div class="title">{{ $title }}</div>
		<div class="quote">{{ Inspiring::quote() }}</div>
	</div>
</div>

@endsection