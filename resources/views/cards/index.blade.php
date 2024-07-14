<x-app-layout>
	{{-- Sidebar --}}
	<x-slot name="leftSidenav">
		<livewire:layout.left-sidenav />
	</x-slot>

	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		<x-grid title="Cards">

			<x-slot name="description">
				<x-joke />
			</x-slot>

			<x-grid.item title="Basic Card Component">
				@include('cards.image-card', ['type' => 2])
			</x-grid.item>

			<x-grid.item title="Image Card Component">
				@include('cards.image-card', ['type' => 1])
			</x-grid.item>

			<x-grid.item title="Badge Card Component">
				@include('cards.badge-card')
			</x-grid.item>

			<x-grid.item title="Icon Card Component">
				@include('cards.icon-card')
			</x-grid.item>

			<x-grid.item title="Copy Page Card Component">
				@include('cards.copy-page-card')
			</x-grid.item>

		</x-grid>

		<x-grid title="Card Hover Components">

			<x-grid.item title="Reflect Hover Card Component">
				@include('cards.reflect-hover')
			</x-grid.item>

		</x-grid>
	</div>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<ul class="lg:ml-4">
			<x-sidenav-list>Basic Card Component</x-sidenav-list>
			<x-sidenav-list>Image Card Component</x-sidenav-list>
			<x-sidenav-list>Badge Card Component</x-sidenav-list>
			<x-sidenav-list>Icon Card Component</x-sidenav-list>
			<x-sidenav-list>Copy Page Card Component</x-sidenav-list>
			<x-sidenav-list>Reflect Hover Card Component</x-sidenav-list>
		</ul>
	</x-slot>
</x-app-layout>
