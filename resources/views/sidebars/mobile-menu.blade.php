@php
	$navList = [
	    'Catnip Hub' => [
	        'icon' => 'bird',
	        'href' => '#',
	    ],
	    'Chase Laser' => [
	        'icon' => 'venom',
	        'href' => '#',
	    ],
	    'Purr Mode' => [
	        'icon' => 'gojo',
	        'href' => '#',
	    ],
	    'Meow Mail' => [
	        'icon' => 'twitter',
	        'href' => '#',
	    ],
	    'Feline Library' => [
	        'icon' => 'heart',
	        'href' => '#',
	    ],
	];
@endphp

<div class="grid min-h-screen place-content-center">
	<div class="relative mx-auto max-w-xs rounded-xl bg-white shadow-lg">
		<!-- Header -->
		<header class="mb-10 flex transform items-center rounded-[10px_10px_0_55px] bg-gradient-to-r from-blue-500 to-light-accent px-6 py-8 dark:to-dark-accent">
			<!-- Cat Image -->
			<img class="h-20 w-20 rounded-full ring-4 ring-gray-200 ring-opacity-20" src="{{ asset('images/square/animal-brown-cat.png') }}" alt="cat">
			<div class="ml-5">
				<h1 class="text-lg tracking-wide text-white">Cat Commander</h1>
				<p class="text-sm tracking-wider text-gray-200">Feline Warrior</p>
			</div>
		</header>

		<!-- Button Update -->
		<button class="mx-auto mb-5 flex items-center rounded-md bg-gradient-to-r from-blue-500 to-light-accent py-2 pl-3 pr-4 text-sm capitalize tracking-wider text-white shadow-md dark:to-dark-accent">
			<x-svg.person-plus class="size-7 mr-2" /> Recruit Cat Ally
		</button>

		<!-- Menu List -->
		<ul class="relative pb-5 pr-8">
			@foreach ($navList as $navItem => $navDetails)
				<li class="text-md hover:text-accent flex items-center border-l-4 border-transparent py-4 pl-8 text-secondary hover:border-light-accent dark:hover:border-dark-accent">
					<span class="mr-5 text-inherit">
						<x-dynamic-component class="size-7" :component="'svg.' . $navDetails['icon']" />
					</span>
					{{ $navItem }}
				</li>
			@endforeach

			<!-- Close Icon at the Bottom -->
			<span class="absolute bottom-5 right-5 text-secondary">
				<x-svg.close class="h-8 w-8" />
			</span>
		</ul>
	</div>
</div>
