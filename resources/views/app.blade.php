<!doctype html>
<html lang="en">

	@include('base.head')

	<body>
		
		@include('partials.navigation')

		@yield('content')

		@include('base.footer')
		@include('base.scripts')

		@include('services.google-analytics')
		@include('services.heap-analytics')
		@include('services.olark-customer-support')

	</body>
</html>
