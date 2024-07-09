<x-app-layout>

	@pushOnce('styles')
		<style>
			.s-1 {
				box-shadow: #ccb7ac 6px 6px 12px 0px, #ffffe5 -6px -6px 12px 0px;
				;
			}

			.s-2 {
				box-shadow: #ccb7ac 2px 2px 5px 0px inset, #ffffe5 -3px -3px 7px 0px inset;
			}
		</style>
	@endPushOnce

	{{-- Light Shadows --}}
	<h2 class="bg-light-primary py-5 text-center font-playfair text-2xl font-bold tracking-wider text-light-text-secondary">
		Light Shadows
	</h2>

	<div class="*:size-60 *:col-span-1 *:bg-light-primary *:text-center *:text-sm *:rounded-2xl *:text-light-text *:tracking-wider *:flex *:justify-center *:items-center grid w-full grid-cols-1 place-items-center justify-center gap-8 bg-light-primary p-4 font-karla sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
		<div class="shadow-neu-sun">shadow-neu-sun</div>

		{{-- Neumorphism Shadows --}}
		<div class="shadow-neu-xs">shadow-neu-xs</div>
		<div class="shadow-neu-md-soft">shadow-neu-md-soft</div>
		<div class="shadow-neu-lg">shadow-neu-lg</div>
		<div class="shadow-neu-xl">shadow-neu-xl</div>
		<div class="shadow-neu-xl-soft">shadow-neu-xl-soft</div>

		{{-- Inset Shadows --}}
		<div class="shadow-neu-inset-xs">shadow-neu-inset-xs</div>
		<div class="shadow-neu-inset-sm">shadow-neu-inset-sm</div>
		<div class="shadow-neu-inset-md">shadow-neu-inset-md</div>
		<div class="shadow-neu-inset-md-hard">shadow-neu-inset-md-hard</div>
		<div class="shadow-neu-inset-lg">shadow-neu-inset-lg</div>
		<div class="shadow-neu-inset-lg-soft">shadow-neu-inset-lg-soft</div>
		<div class="shadow-neu-inset-xl">shadow-neu-inset-xl</div>

		{{-- Outset Shadows --}}
		<div class="shadow-neu-outset-sm">shadow-neu-outset-sm</div>
		<div class="shadow-neu-outset-md">shadow-neu-outset-md</div>
		<div class="shadow-neu-outset-lg">shadow-neu-outset-lg</div>

		{{-- Double Shadows --}}
		<div class="p-4 shadow-neu-inset-md">
			<div class="size-full flex-center rounded-2xl p-2 shadow-neu-lg">shadow-neu-inset-md & shadow-neu-lg</div>
		</div>
	</div>

	{{-- Dark Shadows --}}
	<h2 class="bg-dark-primary py-5 text-center font-playfair text-2xl font-bold tracking-wider text-dark-text-secondary">
		Dark Shadows
	</h2>

	<div class="*:size-60 *:text-center *:text-xs *:bg-dark-primary *:col-span-1 *:rounded-2xl *:text-dark-text *:tracking-wider *:flex *:justify-center *:items-center grid grid-cols-1 place-items-center justify-center gap-8 bg-dark-primary p-4 font-karla sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
		<div class="shadow-neu-moon">shadow-neu-moon</div>

		{{-- Neumorphism Shadows dark --}}
		<div class="shadow-neu-dark-xs">shadow-neu-dark-xs</div>
		<div class="shadow-neu-dark-md">shadow-neu-dark-md</div>
		<div class="shadow-neu-dark-lg">shadow-neu-dark-lg</div>
		<div class="shadow-neu-dark-xl">shadow-neu-dark-xl</div>

		{{-- Inset Shadows dark --}}
		<div class="shadow-neu-dark-inset-xs">shadow-neu-dark-inset-xs</div>
		<div class="shadow-neu-dark-inset-sm">shadow-neu-dark-inset-sm</div>
		<div class="shadow-neu-dark-inset-md-hard">shadow-neu-dark-inset-md-hard</div>
		<div class="shadow-neu-dark-inset-lg">shadow-neu-dark-inset-lg</div>

		{{-- Outset Shadows dark --}}
		<div class="shadow-neu-dark-outset-sm">shadow-neu-dark-outset-sm</div>
		<div class="shadow-neu-dark-outset-md">shadow-neu-dark-outset-md</div>
		<div class="shadow-neu-dark-outset-lg">shadow-neu-dark-outset-lg</div>

		{{-- Double Shadows dark --}}
		<div class="p-4 shadow-neu-dark-inset-md">
			<div class="size-full flex-center rounded-2xl p-2 shadow-neu-dark-md">shadow-neu-dark-inset-md & shadow-neu-dark-md</div>
		</div>
	</div>

</x-app-layout>
