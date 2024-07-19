<x-app-layout>

	<x-grid title="Badges">
		<x-slot name="description">
			Badges are used to highlight an item or to show the status of an item. They are commonly used to indicate the status of a notification, such as unread messages or pending tasks. Badges can also be used to highlight important information or to visually differentiate items. They are typically small in size and can be placed on various elements, such as buttons, avatars, or navigation items.
		</x-slot>

		<x-grid.item title="Badge">
			<div class="flex-center gap-5">
				<div class="neu-badge neu-badge-primary">Hello</div>
				<div class="neu-badge neu-badge-secondary">Hello</div>
				<div class="neu-badge neu-badge-highlight">Hello</div>
				<div class="neu-badge neu-badge-accent">Hello</div>
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
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Sizing With Badges">
			<div class="flex-center gap-5">
				<div class="neu-badge">Hello</div>
				<div class="neu-badge neu-badge-md">Hello</div>
				<div class="neu-badge neu-badge-lg">Hello</div>
				<div class="neu-badge neu-badge-xl">Hello</div>
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

		<x-grid.item title="Notification Badges">
			<button class="neu-btn" type="button">
				Notifications
				<span class="neu-badge ml-2">5</span>
				<span class="sr-only">unread messages</span>
			</button>
		</x-grid.item>
	</x-grid>

	{{-- Side Navigation --}}
	<x-slot name="rightSidenav">
		<x-sidenav-list>Badge</x-sidenav-list>
		<x-sidenav-list>Sizing With Badges</x-sidenav-list>
		<x-sidenav-link>Notification Badges</x-sidenav-link>
	</x-slot>

</x-app-layout>
