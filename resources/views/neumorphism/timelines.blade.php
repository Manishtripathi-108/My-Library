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

		<x-grid.item title="Vertical Centered Timeline">
			<section class="relative flex min-h-screen flex-col justify-center overflow-hidden">
				<div class="mx-auto w-full max-w-6xl px-4 py-24 md:px-6">
					<!-- Vertical Timeline -->
					<div class="before:bg-primary relative space-y-8 before:absolute before:inset-0 before:ml-5 before:h-full before:w-0.5 before:-translate-x-px before:rounded-sm before:p-1 before:shadow-neu-inset-xs dark:before:shadow-neu-dark-inset-xs md:before:mx-auto md:before:translate-x-0">

						<!-- Item 1 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.naruto class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Naruto Becomes Hokage</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">27/03/2017</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Naruto Uzumaki finally achieves his dream of becoming the Hokage of the Hidden Leaf Village.</div>
							</div>
						</div>

						<!-- Item 2 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.deku class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Deku Enrolls in U.A. High</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">03/04/2016</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Izuku Midoriya, also known as Deku, starts his journey to become the world's greatest hero by enrolling in U.A. High School.</div>
							</div>
						</div>

						<!-- Item 3 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.gojo class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Koro-sensei's Arrival</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">09/01/2015</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Koro-sensei, a powerful and mysterious creature, becomes the homeroom teacher of Class 3-E and sets them a challenging task.</div>
							</div>
						</div>

						<!-- Item 4 -->
						<div class="is-active group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.brook class="size-7" />
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Titan Attack</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wider">07/04/2013</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">The Colossal Titan breaches the wall, marking the beginning of humanity's fight for survival against the Titans in Attack on Titan.</div>
							</div>
						</div>

						<!-- Item 5 -->
						<div class="group relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse">
							<!-- Icon -->
							<div class="bg-primary group-[.is-active]:bg-secondary text-secondary group-[.is-active]:text-primary flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-light-secondary p-2 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
								<x-svg.luffy class="size-7"/>
							</div>
							<!-- Card -->
							<div class="bg-primary w-[calc(100%-4rem)] rounded border border-light-secondary p-4 shadow-neu-inset-sm dark:border-dark-secondary dark:shadow-neu-dark-inset-sm md:w-[calc(50%-2.5rem)]">
								<div class="mb-1 flex items-center justify-between space-x-2">
									<div class="text-primary font-playfair font-bold tracking-wide">Luffy Declares War</div>
									<time class="text-highlight font-karla text-xs font-medium tracking-wide">15/04/2006</time>
								</div>
								<div class="text-secondary font-karla tracking-wide">Luffy declares war on the World Government to save his crewmate, Robin, showcasing his unwavering determination in One Piece.</div>
							</div>
						</div>

					</div>
					<!-- End: Vertical Timeline 2 -->

				</div>
			</section>
		</x-grid.item>

	</x-grid>

</x-app-layout>
