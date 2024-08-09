<x-app-layout title="Cards">
	<x-grid title="Cards">

		<x-slot name="description">
			Card components are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way. Cards are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Badge Card">
			@include('cards.badge-card')
		</x-grid.item>

		<x-grid.item title="Comment Card">
			@include('cards.comment')
		</x-grid.item>

		<x-grid.item title="Icon Card">
			@include('cards.icon-card')
		</x-grid.item>

	</x-grid>

	{{-- Image Cards --}}
	<x-grid title="Image Cards">
		<x-slot name="description">
			Image cards are used to display images in a structured manner. They are used to display images in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Basic Image Card">
			@include('cards.image-cards', ['type' => 1])
		</x-grid.item>

		<x-grid.item title="Hover Image Card">
			@include('cards.image-cards', ['type' => 2])
		</x-grid.item>

		<x-grid.item title="Reflecting Image Cards">
			@include('cards.image-cards', ['type' => 3])
		</x-grid.item>
	</x-grid>

	{{-- Notebook Page Cards --}}
	<x-grid title="Notebook Page Cards">
		<x-slot name="description">
			Notebook page cards are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Page Card">
			@include('cards.notebook-page-cards')
		</x-grid.item>

		<x-grid.item title="Page Card 2">
			@include('cards.notebook-page-cards', ['type' => 2])
		</x-grid.item>
	</x-grid>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<x-sidenav-list>Badge Card</x-sidenav-list>
		<x-sidenav-list>Comment Card</x-sidenav-list>
		<x-sidenav-list>Icon Card</x-sidenav-list>

		<x-sidenav-list>Image Cards</x-sidenav-list>
		<x-sidenav-list class="pl-2">Basic Image Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Hover Image Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Reflecting Image Cards</x-sidenav-list>

		<x-sidenav-list>Notebook Page Cards</x-sidenav-list>
		<x-sidenav-list class="pl-2">Page Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Page Card 2</x-sidenav-list>

	</x-slot>
</x-app-layout>
