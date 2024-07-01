<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="Author" content="Manish Tripathi">
	<meta name="Developer" content="Manish Tripathi">
	<meta name="Owner" content="Manish Tripathi">

	<title>{{ $title ? $title . ' | ' . config('app.name', 'Component Library') : config('app.name', 'Component Library') }}</title>

	<!-- Favicon and Apple Touch Icons -->
	<link href="{{ asset('apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
	<link type="image/png" href="{{ asset('favicon-32x32.png') }}" rel="icon" sizes="32x32">
	<link type="image/png" href="{{ asset('favicon-16x16.png') }}" rel="icon" sizes="16x16">
	<link href="{{ asset('site.webmanifest') }}" rel="manifest">
	<link href="{{ asset('safari-pinned-tab.svg') }}" rel="mask-icon" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- styles -->
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- scripts -->
	@stack('styles')

	<style>
		#toggleDarkMode {
			width: 100px;
			height: 100px;
			appearance: none;
			box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5),
				10px 10px 15px rgba(70, 70, 70, 0.15);
			border-radius: 50%;
			border: solid 8px #ecf0f3;
			outline: none;
			display: flex;
			justify-content: center;
			align-items: center;
			cursor: pointer;
		}

		.toggleDarkMode-on {
			box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.5),
				10px 10px 15px rgba(70, 70, 70, 0.15),
				inset -10px -10px 15px rgba(255, 255, 255, 0.5),
				inset 10px 10px 15px rgba(70, 70, 70, 0.15) !important;
		}
	</style>

	<script>
		tailwind.config = {
			content: ["./*.html"],
			darkMode: "class"
		};
	</script>

</head>

<body class="bg-primary font-sans antialiased">
	{{-- Header --}}
	<header class="bg-secondary flex items-center justify-between p-4 text-white">
		<button class="bg-red-700 dark:bg-black" id="toggleDarkMode" title="Toggle Dark Mode">
			<x-svg.sun class="block h-6 w-6 dark:hidden" />
			<x-svg.moon class="hidden h-6 w-6 dark:block" />
		</button>
	</header>
	{{-- Page Content --}}
	<main>
		{{ $slot }}
	</main>

	@stack('scripts')
	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
