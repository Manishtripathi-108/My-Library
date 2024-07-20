<x-app-layout>

	<x-grid title="Blog Cards">

		<x-slot name="description">
			Blog cards are used to display blog posts in a visually appealing way. They can be used to display a featured image, title, author, and other details.
		</x-slot>

		<x-grid.item title="Blog Card 1">
			<div class="flex-center flex-wrap">
				<div class="w-full px-3 md:w-2/5">
					<div class="bg-primary overflow-hidden rounded-lg border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
						<img class="h-auto w-full rounded-t-lg" src="{{ asset('images/om.png') }}" alt="">
						<div class="p-6">
							<span class="text-tertiary text-primary flex items-center gap-2 text-sm"> <x-svg.ex class="size-4" /> Shiva</span>
							<h3 class="text-primary mt-3 font-karla text-lg">&#2384; the most powerful symbol in Hinduism</h3>
							<p class="text-secondary mt-3 font-karla tracking-wide"><x-joke /></p>
							<a class="neu-btn mt-4 inline-block text-sm" href="#">Learn More</a>
						</div>
					</div>
				</div>

				<div class="w-full px-3 md:w-2/5">
					<div class="bg-primary overflow-hidden rounded-lg border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
						<div class="p-4">
							<img class="h-auto w-full rounded" src="{{ asset('images/om.png') }}" alt="">
						</div>
						<div class="p-6 pt-2">
							<div class="flex items-center justify-between">
								<div class="flex items-center">
									<a class="text-primary flex items-center font-karla" href="#" title="23k followers">
										<img class="mr-2 h-8 w-8 rounded-full object-cover" src="{{ asset('images/fox.png') }}" alt="Fox">
										Jo J. Moore
									</a>
								</div>
								<div class="text-secondary flex items-center gap-1 font-karla text-sm"><x-svg.calender class="size-3" />20 June 2024</div>
							</div>
							<h3 class="text-primary mt-4 font-karla text-lg">&#2384; the most powerful symbol in Hinduism</h3>
							<p class="text-secondary mt-3 font-karla tracking-wide"><x-joke /></p>
							<a class="neu-btn mt-3 inline-block text-sm" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Blog Card 2">
			<div class="bg-primary w-3/4 grid grid-cols-3 place-items-center overflow-hidden rounded-lg border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
				<div class="flex-center col-span-1 aspect-square w-full overflow-hidden">
					<img class="h-full w-full object-cover" src="{{ asset('images/fox.png') }}" alt="Fox">
				</div>
				<div class="col-span-2">
					<div class="p-6">
						<a href="#">
							<h3 class="text-primary mb-5 text-2xl font-karla">Red Fox</h3>
						</a>
						<p class="text-secondary mb-6 font-karla tracking-wide"><x-joke /></p>
						<div class="flex-center">
							<div class="text-secondary flex items-center gap-1 font-karla text-sm"><x-svg.calender class="size-3" />20 June 2024</div>
							<a class="text-sm ml-auto text-secondary flex-center gap-2" href="#"><x-svg.comments class="size-4"/></span>21</a>
						</div>
					</div>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
