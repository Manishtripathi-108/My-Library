<x-app-layout title="Popovers">

	<x-grid title="Popovers">
		<x-slot name="description">
			Popovers are small overlay content containers that are used to display contextual information or actions. They are typically triggered by a user action, such as clicking a button or hovering over an element. Popovers are often used to provide additional information about a specific element or to present a set of actions that can be performed on that element.
		</x-slot>

		<x-grid.item title="Popovers">
			<div class="flex-center flex-wrap gap-4">
				<!-- Top Popover -->
				<div class="relative flex justify-center" x-data="{ open: false }">
					<button class="neu-btn" @click="open = !open">Popover on top</button>
					<div class="bg-primary text-secondary absolute bottom-full left-1/2 z-50 mb-2 w-72 -translate-x-1/2 rounded-lg shadow-neu-xs" x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90 -translate-x-1/2" x-transition:enter-end="opacity-100 scale-100 -translate-x-1/2" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100 -translate-x-1/2" x-transition:leave-end="opacity-0 scale-90 -translate-x-1/2" x-cloak>
						<h2 class="text-primary mb-1 p-3 text-left text-sm font-medium shadow-neu-inset-xs first:rounded-t-lg last:rounded-b-lg dark:shadow-neu-dark-inset-xs">This is the top popover content.</h2>
						<p class="text-secondary p-3 text-sm font-normal first:rounded-t-lg last:rounded-b-lg">Popovers are small overlay content containers that are used to display contextual information or actions.</p>
					</div>
				</div>

				<!-- Bottom Popover -->
				<div class="relative flex justify-center" x-data="{ open: false }">
					<button class="neu-btn" @click="open = !open">Popover on bottom</button>
					<div class="bg-primary text-secondary absolute left-1/2 top-full z-50 mt-2 w-72 -translate-x-1/2 rounded-lg shadow-neu-xs" x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90 -translate-x-1/2" x-transition:enter-end="opacity-100 scale-100 -translate-x-1/2" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100 -translate-x-1/2" x-transition:leave-end="opacity-0 scale-90 -translate-x-1/2" x-cloak>
						<h2 class="text-primary mb-1 p-3 text-left text-sm font-medium shadow-neu-inset-xs first:rounded-t-lg last:rounded-b-lg dark:shadow-neu-dark-inset-xs">This is the bottom popover content.</h2>
						<p class="text-secondary p-3 text-sm font-normal first:rounded-t-lg last:rounded-b-lg">Popovers are small overlay content containers that are used to display contextual information or actions.</p>
					</div>
				</div>

				<!-- Left Popover -->
				<div class="relative flex justify-center" x-data="{ open: false }">
					<button class="neu-btn" @click="open = !open">Popover on left</button>
					<div class="bg-primary text-secondary absolute right-full top-1/2 z-50 mr-3 w-72 -translate-y-1/2 rounded-lg shadow-neu-xs" x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90 -translate-y-1/2" x-transition:enter-end="opacity-100 scale-100 -translate-y-1/2" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100 -translate-y-1/2" x-transition:leave-end="opacity-0 scale-90 -translate-y-1/2" x-cloak>
						<h2 class="text-primary mb-1 p-3 text-left text-sm font-medium shadow-neu-inset-xs first:rounded-t-lg last:rounded-b-lg dark:shadow-neu-dark-inset-xs">This is the left popover content.</h2>
						<p class="text-secondary p-3 text-sm font-normal first:rounded-t-lg last:rounded-b-lg">Popovers are small overlay content containers that are used to display contextual information or actions.</p>
					</div>
				</div>

				<!-- Right Popover -->
				<div class="relative flex justify-center" x-data="{ open: false }">
					<button class="neu-btn" @click="open = !open">Popover on right</button>
					<div class="bg-primary text-secondary absolute left-full top-1/2 z-50 ml-2 w-72 -translate-y-1/2 rounded-lg shadow-neu-xs" x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="opacity-0 scale-90 -translate-y-1/2" x-transition:enter-end="opacity-100 scale-100 -translate-y-1/2" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100 -translate-y-1/2" x-transition:leave-end="opacity-0 scale-90 -translate-y-1/2" x-cloak>
						<h2 class="text-primary mb-1 p-3 text-left text-sm font-medium shadow-neu-inset-xs first:rounded-t-lg last:rounded-b-lg dark:shadow-neu-dark-inset-xs">This is the right popover content.</h2>
						<p class="text-secondary p-3 text-sm font-normal first:rounded-t-lg last:rounded-b-lg">Popovers are small overlay content containers that are used to display contextual information or actions.</p>
					</div>
				</div>
			</div>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Popovers</x-sidenav-list>
	</x-slot>

</x-app-layout>
