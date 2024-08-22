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

	<x-grid title="Profile Cards">
		<x-slot name="description">
			Profile cards are used to display user profiles in a visually appealing way. They can be used to display a profile picture, name, bio, and other details.
		</x-slot>

		<x-grid.item title="Profile Card 1">
			<div class="bg-primary text-primary relative flex w-11/12 max-w-[350px] flex-col items-center rounded-2xl border border-light-secondary p-12 text-center shadow-lg dark:border-dark-secondary dark:shadow-gray-800">
				<div class="size-44 relative overflow-hidden rounded-full">
					<img class="absolute left-1/2 top-1/2 aspect-auto w-full -translate-x-1/2 -translate-y-1/2 object-cover" src="{{ asset('images/square/animal-blue-fox.png') }}" />
				</div>

				<h2 class="text-nowrap text-primary mt-6 text-2xl font-semibold">Ashborn GodSlayer</h2>
				<small class="text-secondary text-base">@ashborn_gs</small>
				<div class="flex-center mt-6">
					<button class="neu-btn neu-btn-pill px-5">Follow</button>
					<button class="neu-btn neu-icon-only-btn ml-3 p-2.5">
						<x-svg.upload class="size-6" />
					</button>
					<button class="neu-btn neu-icon-only-btn ml-3 p-2">
						<x-svg.3dots class="size-7" />
					</button>
				</div>

				<div class="flex-center mt-10">
					<a class="text-secondary mx-1.5 no-underline" href="#">
						<x-svg.twitter class="size-5" />
					</a>
					<a class="text-secondary mx-1.5 no-underline" href="#">
						<x-svg.facebook class="size-5" />
					</a>
					<a class="text-secondary mx-1.5 no-underline" href="#">
						<x-svg.instagram class="size-5" />
					</a>
				</div>
			</div>
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

		<x-sidenav-list>Profile Cards</x-sidenav-list>
		<x-sidenav-list class="pl-2">Profile Card 1</x-sidenav-list>

		<x-sidenav-list>Notebook Page Cards</x-sidenav-list>
		<x-sidenav-list class="pl-2">Page Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Page Card 2</x-sidenav-list>

	</x-slot>
</x-app-layout>
