<x-app-layout>

	<x-grid title="Alerts">

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
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		<x-sidenav-list>Basic Alert</x-sidenav-list>

	</x-slot>

</x-app-layout>
