<x-app-layout title="Cards">
	<x-grid title="Cards">

		<x-slot name="description">
			Card components are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way. Cards are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Badge Card">
			@include('cards.badge-card')
		</x-grid.item>

		<x-grid.item title="Basic Card">
			@include('cards.image-cards', ['type' => 1])
		</x-grid.item>

		<x-grid.item title="Comment Card">
			@include('cards.comment')
		</x-grid.item>

		<x-grid.item title="Icon Card">
			@include('cards.icon-card')
		</x-grid.item>

		<x-grid.item title="Image Card">
			@include('cards.image-cards', ['type' => 2])
		</x-grid.item>

		<x-grid.item title="Notebook Page Card">
			@include('cards.notebook-page-card')
		</x-grid.item>

		<x-grid.item title="Notebook Page Card 2">
			@include('cards.notebook-page-card', ['type' => 1])
		</x-grid.item>

		<x-grid.item title="Reflect Hover Card">
			@include('cards.reflect-hover')
		</x-grid.item>
	</x-grid>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<x-sidenav-list>Badge Card</x-sidenav-list>
		<x-sidenav-list>Basic Card</x-sidenav-list>
		<x-sidenav-list>Comment Card</x-sidenav-list>
		<x-sidenav-list>Icon Card</x-sidenav-list>
		<x-sidenav-list>Image Card</x-sidenav-list>
		<x-sidenav-list>Notebook Page Card</x-sidenav-list>
		<x-sidenav-list>Notebook Page Card 2</x-sidenav-list>
		<x-sidenav-list>Reflect Hover Card</x-sidenav-list>
	</x-slot>
</x-app-layout>
