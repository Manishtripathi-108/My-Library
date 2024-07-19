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
		@import url("https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap");
	</style>

	<!-- Scripts & Styles -->
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	@stack('styles')
</head>

<body class="bg-primary scrollbar-thin font-sans antialiased" x-data="{ sidenav_open: false }">
	{{-- Nav --}}
	<div class="bg-primary">
		<livewire:layout.navigation />
	</div>

	<div class="relative mt-2 flex w-full justify-normal md:gap-2" x-data="{ scrollToComponent(id) { document.querySelector(id).scrollIntoView({ behavior: 'smooth' }); } }">
		{{-- Sidenav --}}
		<nav class="scrollbar-thin bg-primary top-0 ml-1 hidden h-screen w-2/3 overflow-y-auto px-2 py-5 sm:w-1/2 md:block md:w-[16%] lg:ml-5" id="left-Sidenav" :class="{ 'block absolute z-10': sidenav_open, 'hidden sticky': !sidenav_open }">
			<livewire:layout.left-sidenav />
		</nav>

		{{-- Page Content --}}
		<main class="w-full md:w-2/3">
			{{ $slot }}
		</main>

		{{-- Right Sidenav --}}
		@if (isset($rightSidenav))
			<nav class="scrollbar-thin sticky top-0 mr-1 hidden h-screen min-w-[16%] overflow-y-auto px-2 py-5 sm:block lg:mr-5" id="right-sidenav" x-data="sidebarNavigation" @scroll.window="updateActiveId">
				{{ $rightSidenav }}
			</nav>
		@endif
	</div>

	{{-- ------------------------Dark Mode Toggle------------------------ --}}
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

		// Add keyboard shortcut to toggle dark mode (Alt + X)
		document.addEventListener("keydown", (e) => {
			if (e.key === "x" && e.altKey) {
				toggleDarkMode();
			}
		});

		// Check the localStorage and apply the mode
		if (localStorage.getItem("darkMode") === "true" || !(darkMode in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches) {
			document.documentElement.classList.add("dark");
		} else {
			document.documentElement.classList.remove("dark");
		}
	</script>

	{{-- -----------------------------AlpineJS----------------------------- --}}
	<script>
		document.addEventListener('alpine:init', () => {
			Alpine.data('sidebarNavigation', () => ({
				activeId: '',
				scrollToComponent(id) {
					document.querySelector(id).scrollIntoView({
						behavior: 'smooth'
					});
					this.activeId = id;
				},
				updateActiveId() {
					const links = document.querySelectorAll('#right-sidenav a[href^="#"]');
					links.forEach(link => {
						const id = link.getAttribute('href');
						const section = document.querySelector(id);
						if (section.getBoundingClientRect().top <= window.innerHeight / 2 && section.getBoundingClientRect().bottom >= window.innerHeight / 2) {
							this.activeId = id;
						}
					});
				}
			}));
		});
	</script>

	@stack('scripts')

</body>

</html>
