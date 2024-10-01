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

	<x-grid title="Flash Messages">
		<x-slot name="description">
			Flash messages are used to display information in a structured manner. They are used to display content in a more organized and visually appealing way.
		</x-slot>

		<x-grid.item title="Success">
			<!-- Success Box -->
			<div class="size-72 flex flex-col items-center justify-start rounded-2xl bg-gradient-to-br from-[#B0DB7D] to-[#99DBB4] p-4" id="success-box">
				<div class="m-0 flex w-full items-start justify-end gap-1.5">
					<div class="size-2 rounded-full bg-white hover:bg-gray-200"></div>
					<div class="size-2 rounded-full bg-white opacity-50"></div>
				</div>

				<!-- Icon -->
				<svg class="size-16 mt-8 animate-bounce text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path fill="currentColor" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10S4.477 0 10 0M7.086 11.399l-.1.004a.68.68 0 0 0-.596.759a3.637 3.637 0 0 0 7.217.024a.682.682 0 0 0-1.352-.172A2.273 2.273 0 0 1 7.744 12a.68.68 0 0 0-.759-.596Zm-1.272-5.12a1.395 1.395 0 1 0 0 2.79a1.395 1.395 0 0 0 0-2.79m8.372 0a1.395 1.395 0 1 0 0 2.79a1.395 1.395 0 0 0 0-2.79" />
				</svg>

				<!-- Shadow below the icon -->
				<div class="h-0.5 w-10 rounded-full bg-gray-500 opacity-50"></div>

				<!-- Message -->
				<div class="mt-4 w-full text-center">
					<h1 class="mb-2 font-bold tracking-wider text-white">Success!</h1>
					<p class="text-sm tracking-wide text-gray-500">Yay, everything is working.</p>
				</div>

				<!-- Continue Button -->
				<button class="shadow-neu-md mt-6 rounded-full bg-white px-6 py-2 text-green-600 transition-transform duration-300 hover:scale-105">
					Continue
				</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Error">
			<!-- Error Box -->
			<div class="size-72 flex flex-col items-center justify-start rounded-2xl bg-gradient-to-bl from-[#EF8D9C] to-[#FFC39E] p-4" id="error-box">
				<!-- Top right circles -->
				<div class="flex w-full items-start justify-end gap-1.5">
					<div class="size-2 rounded-full bg-white hover:bg-gray-200"></div>
					<div class="size-2 rounded-full bg-white opacity-50"></div>
				</div>

				<!-- Animated Face -->
				<svg class="size-16 mt-8 animate-spin text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
					<path fill="currentColor" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m6-1a1 1 0 1 0 0-2a1 1 0 0 0 0 2m5-1a1 1 0 1 0-2 0a1 1 0 0 0 2 0m-1.258 5.152a1 1 0 0 0 1.526-1.293h-.001l-.001-.002l-.003-.004l-.007-.008l-.018-.02a3 3 0 0 0-.225-.225a4 4 0 0 0-.623-.457A4.6 4.6 0 0 0 8 8.5a4.6 4.6 0 0 0-2.39.643a4 4 0 0 0-.795.624l-.053.057l-.018.021l-.007.008l-.003.004v.001l-.002.002a1 1 0 0 0 1.526 1.292l.005-.005q.014-.016.062-.06a2 2 0 0 1 .315-.23A2.6 2.6 0 0 1 8 10.5c.624 0 1.073.185 1.36.357a2 2 0 0 1 .377.29z" />
				</svg>

				<!-- Message -->
				<div class="mt-4 w-full text-center">
					<h1 class="mb-2 font-bold tracking-wider text-white">Error!</h1>
					<p class="text-sm tracking-wide text-gray-500">Oh no, something went wrong.</p>
				</div>

				<!-- Try Again Button -->
				<button class="shadow-neu-md mt-6 rounded-full bg-white px-6 py-2 text-red-600 transition-transform duration-300 hover:scale-105">
					Try Again
				</button>
			</div>
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

		<x-grid.item title="Zoom on Hover Card">
			@include('cards.image-cards', ['type' => 4])
		</x-grid.item>
	</x-grid>

	{{-- Profile Cards --}}
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
		@php
			$list = [
			    'Badge Card' => [],
			    'Comment Card' => [],
			    'Icon Card' => [],
				'Flash Messages' => ['Success', 'Error'],
			    'Image Cards' => ['Basic Image Card', 'Hover Image Card', 'Reflecting Image Cards', 'Zoom on Hover Card'],
			    'Profile Cards' => ['Profile Card 1'],
			    'Notebook Page Cards' => ['Page Card', 'Page Card 2'],
			];
		@endphp

		@foreach ($list as $category => $items)
			<x-sidenav-category>{{ $category }}</x-sidenav-category>
			@foreach ($items as $item)
				<x-sidenav-list>{{ $item }}</x-sidenav-list>
			@endforeach
		@endforeach

	</x-slot>
</x-app-layout>
