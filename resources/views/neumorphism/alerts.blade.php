<x-app-layout title="Alerts | Neumorphism">

	<x-grid title="Alerts">

		<x-slot name="description">
			Alerts are a great way to display important information to your users. They can be used to notify users of a successful action, an error, or a warning.
		</x-slot>

		<x-grid.item title="Basic Alert">
			<div class="flex-center flex-col">
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<x-joke />
				</div>
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<x-joke />
				</div>
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<x-joke />
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Icon Alert">
			<div class="flex-center flex-col">
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-red-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Well done!</strong><x-joke /></span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-yellow-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Well done!</strong><x-joke /></span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-green-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Well done!</strong><x-joke /></span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Extra Content Alert">
			<div class="flex-center flex-col">
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-red-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.ex class="size-6" /><strong class="ml-3">Well Done!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm"><x-joke /><x-joke /><x-joke /></span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs"><x-joke /></span>
				</div>
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-yellow-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.ex class="size-6" /><strong class="ml-3">Well Done!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm"><x-joke /><x-joke /><x-joke /></span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs"><x-joke /></span>
				</div>
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-green-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.ex class="size-6" /><strong class="ml-3">Well Done!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm"><x-joke /><x-joke /><x-joke /></span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs"><x-joke /></span>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Basic Alert</x-sidenav-list>
		<x-sidenav-list>Icon Alert</x-sidenav-list>
		<x-sidenav-list>Extra Content Alert</x-sidenav-list>
	</x-slot>

</x-app-layout>
