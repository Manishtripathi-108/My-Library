<x-app-layout title="Timelines">
	<x-grid title="Timelines">
		<x-slot name="description">
			Timelines are used to show a list of events in chronological order. They are useful for showing a list of events in chronological order. They are useful for showing a list of events in chronological order.
		</x-slot>

		<x-grid.item title="Basic Timeline">
			<div class="flex">
				<div class="rounded-sm p-0.5 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs"></div>
				<ol class="relative">
					<li class="mb-10 ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">October 2002</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Naruto Begins</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">The journey of Naruto Uzumaki starts as he trains to become a powerful ninja and earn the title of Hokage.</p>
					</li>
					<li class="mb-10 ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">April 2016</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">My Hero Academia Debuts</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">Izuku Midoriya, a quirkless boy, dreams of becoming a hero in a world where superpowers are the norm.</p>
					</li>
					<li class="ms-4">
						<div class="bg-primary absolute -start-2 mt-1.5 h-3 w-3 rounded-full border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"></div>
						<time class="text-secondary mb-1 font-karla text-sm font-normal leading-none tracking-wider">January 2015</time>
						<h3 class="text-primary font-playfair text-lg font-semibold tracking-wide">Assassination Classroom Premieres</h3>
						<p class="text-secondary font-karla text-base font-normal tracking-wider">Class 3-E must assassinate their powerful new teacher, Koro-sensei, before he destroys the Earth.</p>
					</li>
				</ol>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
