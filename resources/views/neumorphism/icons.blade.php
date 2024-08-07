<x-app-layout title="Icons | Neumorphism">

	<x-grid title="Icons">
		<x-slot name="description">
			Icons are a great way to add visual elements to your page. You can use them to display information, decorate your page, or just for fun.
		</x-slot>

		<x-grid.item title="Hamburger">
			<div class="size-20 flex-center group cursor-pointer flex-col rounded-lg shadow-neu-xs transition-shadow duration-700 active:shadow-neu-inset-md dark:shadow-neu-dark-md dark:active:shadow-neu-dark-inset-sm">
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:-rotate-45 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:scale-0 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:rotate-45 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
			</div>
		</x-grid.item>

		<x-grid.item title="Color Changing Icons">
			<div class="flex-center bg-primary gap-3 md:gap-5">
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-2xl p-3 text-center shadow-neu-xl hover:text-pink-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-2xl p-3 text-center shadow-neu-xl hover:text-yellow-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-2xl p-3 text-center shadow-neu-xl hover:text-blue-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
					</svg>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Rounded Icon">
			<div class="flex-center bg-primary gap-3 md:gap-5">
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl hover:text-pink-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl hover:text-yellow-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl hover:text-blue-500 active:scale-150 active:shadow-neu-outset-md dark:shadow-neu-dark-lg dark:active:shadow-neu-dark-outset-md">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
					</svg>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Static Rounded">
			<div class="flex-center bg-primary gap-3 md:gap-5">
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl dark:shadow-neu-dark-lg">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl dark:shadow-neu-dark-lg">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
					</svg>
				</div>
				<div class="size-20 bg-primary text-secondary grid cursor-pointer items-center justify-center rounded-full p-3 text-center shadow-neu-xl dark:shadow-neu-dark-lg">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
					</svg>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Icon Shadows">
			<div class="bg-primary flex-center gap-3 md:gap-5">
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full p-8 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full p-8 shadow-neu-xs dark:shadow-neu-dark-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full p-3 shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
					<div class="rounded-full p-5 shadow-neu-xs dark:shadow-neu-dark-xs"><x-svg.ex class="size-7" /></div>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Icons with Border">
			<div class="bg-primary flex-center gap-3 md:gap-5">
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full border-2 border-light-secondary p-8 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full border-2 border-light-secondary p-8 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="bg-primary flex-center text-secondary hover:text-primary rounded-full border-2 border-light-secondary p-3 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<div class="rounded-full border-2 border-light-secondary p-5 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"><x-svg.ex class="size-7" /></div>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Shield Icons">
			<div class="flex-center gap-3 md:gap-5">
				<div class="flex-center text-secondary hover:text-primary rounded-shield border-2 border-light-secondary p-8 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="flex-center text-secondary hover:text-primary rounded-shield border-2 border-light-secondary p-8 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="flex-center text-secondary hover:text-primary rounded-shield border-2 border-light-secondary p-3 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<div class="rounded-shield border-2 border-light-secondary p-5 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"><x-svg.ex class="size-7" /></div>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Animated Icon">
			<div class="flex-center gap-3 md:gap-5">
				<div class="flex-center text-secondary hover:text-primary animate-blob border-2 border-light-secondary p-8 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="flex-center text-secondary hover:text-primary animate-blob border-2 border-light-secondary p-8 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs">
					<x-svg.ex class="size-7" />
				</div>
				<div class="flex-center text-secondary hover:text-primary animate-blob border-2 border-light-secondary p-3 shadow-neu-inset-xs dark:border-dark-secondary dark:shadow-neu-dark-inset-xs">
					<div class="animate-blob border-2 border-light-secondary p-5 shadow-neu-xs dark:border-dark-secondary dark:shadow-neu-dark-xs"><x-svg.ex class="size-7" /></div>
				</div>
			</div>

			<x-slot name="cssCode">
				<style>
					.animate-blob {
						animation: blob 10s infinite;
					}

					@keyframes blob {

						0%,
						100% {
							border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
						}

						50% {
							border-radius: 76% 24% 37% 63% / 68% 67% 33% 32%;
						}
					}
				</style>
			</x-slot>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Hamburger</x-sidenav-list>
		<x-sidenav-list>Color Changing Icons</x-sidenav-list>
		<x-sidenav-list>Rounded Icon</x-sidenav-list>
		<x-sidenav-list>Static Rounded</x-sidenav-list>
		<x-sidenav-list>Icon Shadows</x-sidenav-list>
		<x-sidenav-list>Icons with Border</x-sidenav-list>
		<x-sidenav-list>Shield Icons</x-sidenav-list>
		<x-sidenav-list>Animated Icon</x-sidenav-list>
	</x-slot>

</x-app-layout>
