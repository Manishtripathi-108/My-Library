<x-app-layout title="Toast">
	<x-grid title="Toast">
		<x-slot name="description">
			Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems.
		</x-slot>

		<x-grid.item title="Basic Toast">
			<div class="bg-primary overflow-hidden rounded-lg py-2 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ show: true }" x-show="show" x-transition>
				<div class="flex items-center justify-between border-b border-light-secondary px-4 pb-2 dark:border-dark-secondary">
					<div class="flex items-center">
						<x-svg.naruto class="size-4 text-secondary" />
						<strong class="text-secondary ml-2 font-alegreya tracking-wide">Naruto Uzumaki</strong>
					</div>
					<small class="text-tertiary">11 mins ago</small>
					<button class="text-secondary ml-2 focus:outline-none" @click="show = false">
						<x-svg.close class="size-3" />
					</button>
				</div>
				<div class="text-secondary mt-2 px-4 font-karla text-sm tracking-wide">
					Naruto Uzumaki starts his journey to become Hokage.
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Fixed to Screen Toast">
			<div class="bg-primary fixed bottom-4 overflow-hidden rounded-lg py-2 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ show: true }" x-show="show" x-transition>
				<div class="flex items-center justify-between border-b border-light-secondary px-4 pb-2 dark:border-dark-secondary">
					<div class="flex items-center">
						<x-svg.naruto class="size-4 text-secondary" />
						<strong class="text-secondary ml-2 font-alegreya tracking-wide">Naruto Uzumaki</strong>
					</div>
					<small class="text-tertiary">11 mins ago</small>
					<button class="text-secondary ml-2 focus:outline-none" @click="show = false">
						<x-svg.close class="size-3" />
					</button>
				</div>
				<div class="text-secondary mt-2 px-4 font-karla text-sm tracking-wide">
					Naruto Uzumaki starts his journey to become Hokage.
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Auto Disappearing Toast">
			<div class="bg-primary overflow-hidden rounded-lg py-2 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 5000)">
				<div class="flex items-center justify-between border-b border-light-secondary px-4 pb-2 dark:border-dark-secondary">
					<div class="flex items-center">
						<x-svg.naruto class="size-4 text-secondary" />
						<strong class="text-secondary ml-2 font-alegreya tracking-wide">Naruto Uzumaki</strong>
					</div>
					<small class="text-tertiary">11 mins ago</small>
					<button class="text-secondary ml-2 focus:outline-none" @click="show = false">
						<x-svg.close class="size-3" />
					</button>
				</div>
				<div class="text-secondary mt-2 px-4 font-karla text-sm tracking-wide">
					Naruto Uzumaki starts his journey to become Hokage.
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Animated Toast">
			<div class="bg-primary animation-duration-500 overflow-hidden rounded-lg py-2 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ show: true }" :class="{ 'animate-slide-right-return': show, 'animate-slide-right': !show }" x-show="show" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
				<div class="flex items-center justify-between border-b border-light-secondary px-4 pb-2 dark:border-dark-secondary">
					<div class="flex items-center">
						<x-svg.naruto class="size-4 text-secondary" />
						<strong class="text-secondary ml-2 font-alegreya tracking-wide">Naruto Uzumaki</strong>
					</div>
					<small class="text-tertiary">11 mins ago</small>
					<button class="text-secondary ml-2 focus:outline-none" @click="show = false">
						<x-svg.close class="size-3" />
					</button>
				</div>
				<div class="text-secondary mt-2 px-4 font-karla text-sm tracking-wide">
					Naruto Uzumaki starts his journey to become Hokage.
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Animated Auto Disappearing Toast">
			<div class="bg-primary animation-duration-500 overflow-hidden rounded-lg py-2 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ show: true }" :class="{ 'animate-slide-right-return': show, 'animate-slide-right': !show }" x-show="show" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-init="setTimeout(() => show = false, 5000)">
				<div class="items -center flex justify-between border-b border-light-secondary px-4 pb-2 dark:border-dark-secondary">
					<div class="flex items-start">
						<x-svg.naruto class="size-4 text-secondary" />
						<strong class="text-secondary ml-2 font-alegreya tracking-wide">Naruto Uzumaki</strong>
					</div>
					<small class="text-tertiary">11 mins ago</small>
					<button class="text-secondary ml-2 focus:outline-none" @click="show = false">
						<x-svg.close class="size-3" />
					</button>
				</div>
				<div class="text-secondary mt-2 px-4 font-karla text-sm tracking-wide">
					Naruto Uzumaki starts his journey to become Hokage.
				</div>
			</div>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Basic Toast</x-sidenav-list>
		<x-sidenav-list>Fixed to Screen Toast</x-sidenav-list>
		<x-sidenav-list>Auto Disappearing Toast</x-sidenav-list>
		<x-sidenav-list>Animated Toast</x-sidenav-list>
        <x-sidenav-list>Animated Auto Disappearing Toast</x-sidenav-list>
	</x-slot>

</x-app-layout>
