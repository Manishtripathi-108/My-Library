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

	</x-grid>

</x-app-layout>
