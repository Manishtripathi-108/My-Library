<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-dark-text">
			{{ __('Neumorphism UI') }}
		</h2>
	</x-slot>

	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		{{-- ------------------------------ Clock ----------------------------- --}}
		{{-- <x-grid title="Clock">

			<x-grid.item title="Clock">
				@include('neumorphism.clock')
			</x-grid.item>

		</x-grid> --}}

		{{-- ------------------------------ Login & Signup ----------------------------- --}}
		<x-grid title="Login & Signup">

			<x-grid.item title="Signup Form">
				@include('neumorphism.login-signup-form', ['type' => 'signup'])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-grid title="Product Cards">

			<x-grid.item title="Simple Card">
				@include('neumorphism.product-card')
			</x-grid.item>

			<x-grid.item title="Product without shadow">
				@include('neumorphism.product-card', ['type' => 1])
			</x-grid.item>

			<x-grid.item title="Product with Rating">
				@include('neumorphism.product-card', ['type' => 2])
			</x-grid.item>

			<x-grid.item class="md:col-span-3 lg:col-span-3" title="featured product item">
				@include('neumorphism.product-card', ['type' => 3])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Buttons & Icons ----------------------------- --}}
		<x-grid title="Buttons & Icons">

			<x-grid.item title="Color Change Icons">
				@include('neumorphism.icons')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Switches ----------------------------- --}}
		<x-grid title="Switches">

			<x-grid.item title="Switch">
				@include('neumorphism.switch')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Buttons ----------------------------- --}}
		<x-grid title="Radio Buttons">

			<x-grid.item title="Radio Button">
				@include('neumorphism.radio-btn')
			</x-grid.item>

		</x-grid>

	</div>
</x-app-layout>
