<head>
	<meta charset="utf-8">
	<title>Studio | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet">
	<!-- ================== END core-css ================== -->
	@stack('styles')
</head>