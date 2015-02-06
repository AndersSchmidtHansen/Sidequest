<!doctype html>
<html lang="en">

	@include('base.head')

	<body>
		@include('modules.navigation')

		@yield('content')

		@include('base.footer')
		@include('base.scripts')
		<script src="/js/app.js"></script>

		@include('services.google-analytics')
		@include('services.heap-analytics')
		@include('services.olark-customer-support')

	</body>
</html>
