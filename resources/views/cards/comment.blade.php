@props(['type' => 1])

@switch ($type)
	@case(1)
		<section class="bg-primary text-primary h-auto w-auto min-w-[360px] max-w-[480px] p-12 shadow-[0px_7px_24px_rgba(100,100,100,0.4)]">
			<section>
				<p class="text-primary before:text-secondary after:text-secondary text-left font-serif text-xl font-normal before:inline before:content-['\201C'] after:inline after:content-['\201D']">
					Tales of the legendary blue fox speak of its mystical ability to reveal hidden dimensions, where time dances to a different rhythm and the boundaries of reality blur. Those who are fortunate enough to encounter this elusive creature find themselves on a journey towards forgotten truths and artistic inspiration.
				</p>
			</section>

			<section class="mt-3 flex flex-row items-center pt-6">
				<div class="h-11 w-11 overflow-hidden rounded-full">
					<img class="h-full w-full object-cover" src="{{ asset('images/square/blue-fox.png') }}" alt="Legendary Blue Fox Avatar">
				</div>
				<div class="ml-4 flex flex-col">
					<span class="text-primary font-karla text-sm font-bold">Kurama</span>
					<span class="text-secondary mt-0.5 font-sans text-xs">Guardian of the Hidden Realms</span>
				</div>
			</section>
		</section>
	@break

	@case(2)
	@break

	@default
		<section class="bg-primary text-primary h-auto w-auto min-w-[360px] max-w-[480px] p-12 shadow-[0px_7px_24px_rgba(100,100,100,0.4)]">
			<section>
				<p class="text-primary before:text-secondary after:text-secondary text-left font-serif text-xl font-normal before:inline before:content-['\201C'] after:inline after:content-['\201D']">
					Tales of the legendary blue fox speak of its mystical ability to reveal hidden dimensions, where time dances to a different rhythm and the boundaries of reality blur. Those who are fortunate enough to encounter this elusive creature find themselves on a journey towards forgotten truths and artistic inspiration.
				</p>
			</section>

			<section class="mt-3 flex flex-row items-center pt-6">
				<div class="h-11 w-11 overflow-hidden rounded-full">
					<img class="h-full w-full object-cover" src="{{ asset('images/square/blue-fox.png') }}" alt="Legendary Blue Fox Avatar">
				</div>
				<div class="ml-4 flex flex-col">
					<span class="text-primary font-karla text-sm font-bold">Kurama</span>
					<span class="text-secondary mt-0.5 font-sans text-xs">Guardian of the Hidden Realms</span>
				</div>
			</section>
		</section>
@endswitch
