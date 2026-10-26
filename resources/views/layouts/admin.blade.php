<!DOCTYPE html>
<html lang="en">

{{-- HEAD --}}
@include('admin.partials.head')

<body>
	<!-- BEGIN #app -->
	<div id="app" class="app @yield('app_class')">
		@hasSection('without_menubar')
			{{-- Halaman tanpa header & sidebar (mis. login) --}}
			@yield('content')
		@else
			{{-- HEADER / MENUBAR --}}
			@include('admin.partials.header')
			@include('admin.partials.sidebar')

			{{-- MAIN CONTENT --}}
			<!-- BEGIN #content -->
			<div id="content" class="app-content @yield('content_class')">
				@yield('content')
			</div>
			<!-- END #content -->
		@endif

		{{-- Elemen di luar #content (mis. modal & toast) --}}
		@stack('modals')

		{{-- FOOTER --}}
		@include('admin.partials.footer')
	</div>
	<!-- END #app -->

	{{-- SCRIPTS --}}
	@include('admin.partials.scripts')
</body>
</html>
