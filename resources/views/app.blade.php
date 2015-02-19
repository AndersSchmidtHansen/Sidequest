<!doctype html>
<html lang="en">

	@include('base.head')

	<body>
		@include('modules.navigation')
		@include('modules.sessions.notice')

		@yield('content')

		@include('base.footer')
		@include('base.scripts')
		@yield('additional-scripts')
		<script src="/js/app.js"></script>

		@include('services.google-analytics')
		@include('services.heap-analytics')
		@include('services.olark-customer-support')

	</body>
</html>
