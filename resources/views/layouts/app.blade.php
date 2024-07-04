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
	<meta name="theme-color" content="#FFE9D0">
	<meta name="dark-theme-color" content="#121212">

	<!-- Fonts -->
	<style>
		@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
		@import url("https://fonts.googleapis.com/css?family=Karla:400,700%7CPlayfair+Display:700,400%7CKarla:700,400%7CKarla:700,700");
	</style>

	<!-- Scripts & Styles -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@stack('styles')
</head>

<body class="bg-primary font-sans antialiased">
	<div class="bg-primary">
		<livewire:layout.navigation />

		<!-- Page Heading -->
		@if (isset($header))
			<header class="bg-primary shadow dark:shadow-dark-secondary">
				<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
					{{ $header }}
				</div>
			</header>
		@endif
	</div>

	{{-- Page Content --}}
	<main>
		{{ $slot }}
	</main>

	{{-- Dark Mode Toggle --}}
	<script>
		const toggleDarkModeButton = document.getElementById("toggleDarkMode");

		// Function to toggle dark mode
		const toggleDarkMode = () => {
			document.documentElement.classList.toggle("dark");
			// Save the current mode to localStorage
			const isDarkMode = document.documentElement.classList.contains("dark");
			localStorage.setItem("darkMode", isDarkMode);
		};

		// Add click event listener to the button
		toggleDarkModeButton.addEventListener("click", toggleDarkMode);

		// Check the localStorage and apply the mode
		if (localStorage.getItem("darkMode") === "true" || !(darkMode in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches) {
			document.documentElement.classList.add("dark");
		} else {
			document.documentElement.classList.remove("dark");
		}
	</script>

	@stack('scripts')

</body>

</html>
