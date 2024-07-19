<x-app-layout>

	<x-grid title="Badges">
		<x-slot name="description">
			Badges are used to highlight an item or to show the status of an item. They are commonly used to indicate the status of a notification, such as unread messages or pending tasks. Badges can also be used to highlight important information or to visually differentiate items. They are typically small in size and can be placed on various elements, such as buttons, avatars, or navigation items.
		</x-slot>

		<x-grid.item title="Badge">
			<div class="flex-center gap-5">
				<span class="neu-badge neu-badge-primary">Hello</span>
				<span class="neu-badge neu-badge-secondary">Hello</span>
				<span class="neu-badge neu-badge-highlight">Hello</span>
				<span class="neu-badge neu-badge-accent">Hello</span>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-badge {
						@apply text-secondary text-sm font-karla text-center border border-light-secondary rounded-full shadow-neu-inset-sm py-1 px-2;
						/* dark mode */
						@apply dark:border-dark-secondary dark:shadow-neu-dark-inset-xs;
					}

					.neu-badge-primary {
						@apply text-primary;
					}

					.neu-badge-secondary {
						@apply text-secondary;
					}

					.neu-badge-accent {
						@apply text-accent;
					}

					.neu-badge-highlight {
						@apply text-highlight;
					}
				</style>
		</x-grid.item>

		<x-grid.item title="Sizing With Badges">
			<div class="flex-center gap-5">
				<span class="neu-badge">Hello</span>
				<span class="neu-badge neu-badge-md">Hello</span>
				<span class="neu-badge neu-badge-lg">Hello</span>
				<span class="neu-badge neu-badge-xl">Hello</span>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-badge {
						@apply text-secondary text-sm font-karla text-center border border-light-secondary rounded-full shadow-neu-inset-sm py-1 px-2;
						/* dark mode */
						@apply dark:border-dark-secondary dark:shadow-neu-dark-inset-xs;
					}

					.neu-badge-md {
						@apply py-2 px-3;
					}

					.neu-badge-lg {
						@apply py-3 px-4 text-base;
					}

					.neu-badge-xl {
						@apply py-4 px-5 text-lg;
					}
				</style>
			</x-slot>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		<x-sidenav-list>Badge</x-sidenav-list>
		<x-sidenav-list>Sizing With Badges</x-sidenav-list>

	</x-slot>

</x-app-layout>
