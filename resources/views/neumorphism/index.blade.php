<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		{{-- ------------------------------ Login & Signup ----------------------------- --}}
		<x-cards-section title="Login & Signup">

			<x-cards-section.card title="Signup Form">
				@include('neumorphism.login-signup-form', ['type' => 'signup'])
			</x-cards-section.card>

		</x-cards-section>

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-cards-section title="Product Cards">

			<x-cards-section.card title="Simple Card">
				@include('neumorphism.product-card')
			</x-cards-section.card>

			<x-cards-section.card title="Product without shadow">
				@include('neumorphism.product-card', ['type' => 1])
			</x-cards-section.card>

			<x-cards-section.card title="Product with Rating">
				@include('neumorphism.product-card', ['type' => 2])
			</x-cards-section.card>

			<x-cards-section.card class="md:col-span-3 lg:col-span-3" title="featured product item">
				@include('neumorphism.product-card', ['type' => 3])
			</x-cards-section.card>

		</x-cards-section>

		{{-- ------------------------------ Buttons & Icons ----------------------------- --}}
		<x-cards-section title="Buttons & Icons">

			<x-cards-section.card title="Color Change Icons">
				@include('neumorphism.color-change-icons')
			</x-cards-section.card>

		</x-cards-section>

		{{-- ------------------------------ Switches ----------------------------- --}}
		<x-cards-section title="Switches">

			<x-cards-section.card title="Switch">
				@include('neumorphism.switch')
			</x-cards-section.card>

		</x-cards-section>

		{{-- ------------------------------ Buttons ----------------------------- --}}
		<x-cards-section title="Radio Buttons">

			<x-cards-section.card title="Radio Button">
				@include('neumorphism.radio-btn')
			</x-cards-section.card>

		</x-cards-section>

	</div>
</x-app-layout>
