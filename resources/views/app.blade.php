<!doctype html>
<html lang="en">

	@include('base.head')

	<body>

		@yield('content')

		@include('base.scripts')

		@include('services.google-analytics')
		@include('services.heap-analytics')

	</body>
</html>
