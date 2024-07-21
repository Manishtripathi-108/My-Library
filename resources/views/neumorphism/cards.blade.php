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
			<div class="bg-primary grid w-3/4 grid-cols-3 place-items-center overflow-hidden rounded-lg border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
				<div class="flex-center col-span-1 aspect-square w-full overflow-hidden">
					<img class="h-full w-full object-cover" src="{{ asset('images/fox.png') }}" alt="Fox">
				</div>
				<div class="col-span-2">
					<div class="p-6">
						<a href="#">
							<h3 class="text-primary mb-5 font-karla text-2xl">Red Fox</h3>
						</a>
						<p class="text-secondary mb-6 font-karla tracking-wide"><x-joke /></p>
						<div class="flex-center">
							<div class="text-secondary flex items-center gap-1 font-karla text-sm"><x-svg.calender class="size-3" />20 June 2024</div>
							<a class="text-secondary flex-center ml-auto gap-2 text-sm" href="#"><x-svg.comments class="size-4" /></span>21</a>
						</div>
					</div>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Blog Card 3">
			<div class="bg-primary flex-center w-3/4 flex-col overflow-hidden rounded-lg border border-light-secondary shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
				<div class="w-full px-5 py-4">
					<div class="mb-4">
						<div class="flex items-center justify-between">
							<div class="flex items-center">
								<a class="flex items-center" href="#">
									<img class="size-8 mr-2 rounded-full object-cover font-karla" src="{{ asset('images/fox.png') }}" alt="Fox">
									its me the fox hero
								</a>
							</div>
							<div class="flex items-center">
								<div class="relative inline-block text-left">
									<button class="inline-flex w-full justify-center px-2 py-1 text-gray-700">
										<x-svg.3dots class="size-7" />
									</button>
									<div class="absolute right-0 mt-2 hidden w-56 origin-top-right rounded-md">
										<div class="py-1">
											<a class="block px-4 py-2 text-sm text-gray-700" href="#">
												<span class="fas fa-edit mr-2"></span> Edit post
											</a>
											<a class="block px-4 py-2 text-sm text-red-700" href="#">
												<span class="fa fa-trash mr-2"></span> Delete post
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<img class="aspect-square h-auto w-full rounded-lg object-cover" src="{{ asset('images/fox.png') }}" alt="Fox">
				</div>
				<div class="w-full px-5 py-2">
					<a href="#">
						<h3 class="text-primary my-4 text-2xl">New Joke By Fox</h3>
					</a>
					<p class="text-secondary mb-4"><x-joke /><x-joke /><x-joke /></p>
				</div>
				<div class="w-full px-5 py-4">
					<div class="flex items-center justify-between">
						<div class="flex-center">
							<button class="neu-btn neu-icon-btn text-primary mr-2 gap-1 p-2"><x-svg.up class="size-5" />1000</button>
							<button class="neu-btn neu-icon-btn gap-1 p-2 text-red-800"><x-svg.down class="size-5" />0</button>
						</div>
						<div class="flex items-center">
							<a class="text-primary flex-center mr-3 gap-1 rounded-md p-2 transition-shadow hover:shadow-neu-inset-sm dark:hover:shadow-neu-dark-inset-sm" href="#"> <x-svg.comments class="size-5" />143M</a>
							<button class="neu-btn neu-icon-btn text-primary mr-3"><x-svg.share class="size-5" /> Share</button>
							<button class="neu-btn neu-icon-btn text-primary"><x-svg.save class="size-5" /> Save</button>
						</div>
					</div>
				</div>
			</div>
		</x-grid.item>
	</x-grid>

	<x-grid title="Profile Cards">
		<x-slot name="description">
			Profile cards are used to display user profiles in a visually appealing way. They can be used to display a profile picture, name, bio, and other details.
		</x-slot>

		<x-grid.item title="Profile Card 1">
			<div class="bg-primary text-primary relative flex w-11/12 max-w-[350px] flex-col items-center rounded-2xl border-4 border-solid border-transparent bg-clip-padding p-12 text-center shadow-neu-xs after:absolute after:-bottom-1 after:-left-1 after:-right-1 after:-top-1 after:-z-10 after:block after:rounded-2xl dark:shadow-neu-dark-xs">
				<div class="size-44 relative overflow-hidden rounded-full">
					<img class="absolute left-2/4 top-2/4 aspect-auto w-full -translate-x-2/4 -translate-y-2/4 object-cover" src="{{ asset('images/fox.png') }}" />
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

		<x-grid.item title="Profile Card 2">

		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		<div class="text-secondary mt-2 list-none text-xs">
			Blog Cards
			<div class="pl-2">
				<x-sidenav-list>Blog Card 1</x-sidenav-list>
				<x-sidenav-list>Blog Card 2</x-sidenav-list>
				<x-sidenav-list>Blog Card 3</x-sidenav-list>
			</div>
		</div>

		<div class="text-secondary mt-3 list-none text-xs">
			Profile Cards
			<div class="pl-2">
				<x-sidenav-list>Profile Card 1</x-sidenav-list>
				<x-sidenav-list>Profile Card 2</x-sidenav-list>
			</div>
		</div>

	</x-slot>

</x-app-layout>
