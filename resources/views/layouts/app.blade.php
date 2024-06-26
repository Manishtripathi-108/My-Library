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

</head>

<body class="font-sans antialiased">
	{{-- Page Content --}}
	<main>
		{{ $slot }}
	</main>

	@stack('scripts')
</body>

</html>
