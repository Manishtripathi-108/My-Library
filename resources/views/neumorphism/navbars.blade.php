<x-app-layout title="Navbars | Neumorphism">

	<x-grid title="Navbars">
		<x-slot name="description">
			Navbars are responsive meta components that serve as navigation headers for your application or site. They begin collapsed in mobile views and become horizontal as the available viewport width increases.
		</x-slot>

		<x-grid.item title="Default Navbar">
			<nav class="bg-primary p-4" x-data="{ open: false, dropdownOpen: false }">
				<div class="container mx-auto flex items-center justify-between">
					<a class="text-secondary focus:text-primary hover:text-primary font-alegreya text-2xl font-bold transition-all md:mr-4" href="#">Brand</a>
					<button class="text-secondary focus:outline-none md:hidden" @click="open = !open">
						<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>

					<div class="w-full md:flex md:w-auto md:items-center" :class="{ 'block': open, 'hidden': !open }">
						<ul class="text-secondary md:flex md:space-x-4">
							<li><a class="focus:text-primary hover:text-primary block border-b-2 border-transparent py-2 font-karla text-lg transition-all hover:border-light-accent focus:border-light-accent focus:outline-none dark:hover:border-dark-accent dark:focus:border-dark-accent md:inline-block" href="#">Home</a></li>
							<li><a class="focus:text-primary hover:text-primary block border-b-2 border-transparent py-2 font-karla text-lg transition-all hover:border-light-accent focus:border-light-accent focus:outline-none dark:hover:border-dark-accent dark:focus:border-dark-accent md:inline-block" href="#">About</a></li>
							<li class="relative" @click="dropdownOpen = !dropdownOpen" @click.outside="dropdownOpen = false">
								<button class="focus:text-primary hover:text-primary flex items-end justify-center border-b-2 border-transparent py-2 font-karla text-lg transition-all hover:border-light-accent focus:border-light-accent focus:outline-none dark:hover:border-dark-accent dark:focus:border-dark-accent md:inline-flex">
									Services
									<x-svg.dropdown class="size-5 transition duration-500" ::class="{ '-rotate-180 origin-center': dropdownOpen }" />
								</button>
								<div class="bg-primary absolute left-0 mt-1 w-48 rounded-lg shadow-neu-xs dark:shadow-neu-dark-xs [&>*:first-child]:rounded-t-lg [&>*:last-child]:rounded-b-lg" x-cloak x-show="dropdownOpen" x-transition.duration.500>
									<a class="text-secondary hover:text-primary focus:text-primary block px-4 py-2 hover:shadow-neu-inset-xs focus:shadow-neu-inset-xs dark:hover:shadow-neu-dark-inset-xs dark:focus:shadow-neu-dark-inset-xs" href="#">Web Design</a>
									<a class="text-secondary hover:text-primary focus:text-primary block px-4 py-2 hover:shadow-neu-inset-xs focus:shadow-neu-inset-xs dark:hover:shadow-neu-dark-inset-xs dark:focus:shadow-neu-dark-inset-xs" href="#">SEO</a>
									<a class="text-secondary hover:text-primary focus:text-primary block px-4 py-2 hover:shadow-neu-inset-xs focus:shadow-neu-inset-xs dark:hover:shadow-neu-dark-inset-xs dark:focus:shadow-neu-dark-inset-xs" href="#">Marketing</a>
								</div>
							</li>
							<li><a class="focus:text-primary hover:text-primary block border-b-2 border-transparent py-2 font-karla text-lg transition-all hover:border-light-accent focus:border-light-accent focus:outline-none dark:hover:border-dark-accent dark:focus:border-dark-accent md:inline-block" href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</x-grid.item>

	</x-grid>

</x-app-layout>
