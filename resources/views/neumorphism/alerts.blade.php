<x-app-layout title="Alerts | Neumorphism">

	<x-grid title="Alerts">

		<x-slot name="description">
			Alerts are a great way to display important information to your users. They can be used to notify users of a successful action, an error, or a warning.
		</x-slot>

		<x-grid.item title="Basic Alert">
			<div class="flex-center flex-col">
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<span>"A dropout will beat a genius through hard work." — Rock Lee</span>
				</div>
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<span>"Power comes in response to a need, not a desire." — Goku</span>
				</div>
				<div class="text-primary mb-5 line-clamp-1 w-full rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">
					<span>"If you don’t take risks, you can’t create a future." — Monkey D. Luffy</span>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Icon Alert">
			<div class="flex-center flex-col">
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-red-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Well done!</strong> "In the ninja world, those who break the rules are scum, but those who abandon their friends are worse than scum." — Kakashi Hatake</span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-yellow-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Edward Elric</strong> "A lesson without pain is meaningless."</span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
				<div class="mb-5 flex w-full items-center justify-start gap-5 rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-green-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<x-svg.ex class="size-7" />
					<span class="text-sm"><strong>Roy Mustang</strong> "The world's not perfect, but it's there for us doing the best it can."</span>
					<button class="ml-auto" type="button" @click="close = true">
						<x-svg.close class="size-5" />
					</button>
				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Extra Content Alert">
			<div class="flex-center flex-col">
				<!-- Red Alert -->
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-red-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.avengers class="size-6" /><strong class="ml-3">Danger!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm">
						<span>"The hardest choices require the strongest wills." — Thanos</span>
					</span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs">"Fear is not evil. It tells you what your weakness is." — Gildarts Clive</span>
				</div>

				<!-- Yellow Alert -->
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-yellow-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.naruto class="size-6" /><strong class="ml-3">Caution!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm">
						<span>"A person grows up when he is able to overcome hardships." — Jiraiya</span>
					</span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs">"It’s not the face that makes someone a monster; it’s the choices they make with their lives." — Naruto Uzumaki</span>
				</div>

				<!-- Green Alert -->
				<div class="mb-5 flex w-full flex-col justify-center rounded-xl border border-light-secondary px-6 py-4 font-karla tracking-wide text-green-500 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ close: false }" x-show="!close" x-transition.duration.300ms>
					<div class="flex items-center">
						<x-svg.deku class="size-6" /><strong class="ml-3">Safe!</strong>
						<button class="ml-auto" type="button" @click="close = true"><x-svg.close class="size-5" /></button>
					</div>
					<span class="mt-4 text-sm">
						<span>"It’s not the world that’s messed up; it’s those of us in it." — Sakata Gintoki</span>
					</span>
					<hr class="my-6 border-t border-gray-500 dark:border-gray-700">
					<span class="mb-4 text-xs">"A true hero protects his friends, family, and everyone who looks up to him." — All Might</span>
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
