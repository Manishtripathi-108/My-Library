<x-app-layout>

	{{-- Content --}}
	<div class="flex flex-col items-center justify-center gap-y-5 p-5 md:px-2">

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

			<x-grid.item title="featured product item">
				@include('neumorphism.product-card', ['type' => 3])
			</x-grid.item>

			<x-grid.item title="Checkout Card">
				@include('neumorphism.product-card', ['type' => 4])
			</x-grid.item>

			<x-grid.item title="Checkout summary">
				@include('neumorphism.product-card', ['type' => 5])
			</x-grid.item>

			<x-grid.item title="Checkout summary 2">
				@include('neumorphism.product-card', ['type' => 6])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Tab ----------------------------- --}}
		<x-grid title="Tab">
			<x-grid.item title="Tab">
				@include('neumorphism.tab')
			</x-grid.item>

		</x-grid>

	</div>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<ul class="lg:ml-4">
			<x-sidenav-list>Simple Card</x-sidenav-list>
			<x-sidenav-list>Product Without Shadow</x-sidenav-list>
			<x-sidenav-list>Product With Rating</x-sidenav-list>
			<x-sidenav-list>Featured Product Item</x-sidenav-list>
			<x-sidenav-list>Checkout Card</x-sidenav-list>
			<x-sidenav-list>Checkout Summary</x-sidenav-list>
			<x-sidenav-list>Checkout Summary 2</x-sidenav-list>
			<x-sidenav-list>Tab</x-sidenav-list>
		</ul>
	</x-slot>
</x-app-layout>
