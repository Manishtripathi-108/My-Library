<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-cards-section title="">

			<x-cards-section.card title="Product Cards">
				@include('neumorphism.product-card')
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
