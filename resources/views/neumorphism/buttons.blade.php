<x-app-layout title="Buttons | Neumorphism">

	<x-grid title="Buttons">

		<x-slot name="description">
			Buttons are used to initialize an action. Clicking on a button triggers an event or a series of events that result in an action. They are typically placed throughout your UI, in places like: dialogs, forms, cards, and toolbars.
		</x-slot>

		<x-grid.item title="Buttons">
			<div class="flex-center">
				<button class="neu-btn text-primary mr-3" type="button">Primary</button>
				<button class="neu-btn text-secondary mr-3" type="button">Secondary</button>
				<button class="neu-btn mr-3 text-green-700" type="button">Success</button>
				<button class="neu-btn mr-3 text-red-700" type="button">Danger</button>
				<button class="neu-btn text-primary active mr-3" type="button">Active</button>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-btn {
						@apply text-secondary text-center tracking-wider border border-light-secondary py-2 px-4 rounded-lg transition-all duration-300 shadow-neu-xs;
						/* dark mode */
						@apply dark:border-dark-secondary dark:shadow-neu-dark-xs;
					}

					.neu-btn.active,
					.neu-btn:active {
						@apply text-primary shadow-neu-inset-sm;
						color: #767676;
						/* dark mode*/
						@apply dark:shadow-neu-dark-inset-xs;
					}

					.neu-btn:hover:not(.active),
					.neu-btn:focus:not(.active) {
						@apply text-primary transform scale-105;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Button Pill">
			<div class="flex-center">
				<button class="neu-btn neu-btn-pill text-primary mr-3" type="button">Primary</button>
				<button class="neu-btn neu-btn-pill text-secondary mr-3" type="button">Secondary</button>
				<button class="neu-btn neu-btn-pill mr-3 text-green-700" type="button">Success</button>
				<button class="neu-btn neu-btn-pill mr-3 text-red-700" type="button">Danger</button>
				<button class="neu-btn neu-btn-pill text-primary active mr-3" type="button">Active</button>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-btn {
						@apply text-secondary text-center tracking-wider border border-light-secondary py-2 px-4 rounded-lg transition-all duration-300 shadow-neu-xs;
						/* dark mode */
						@apply dark:border-dark-secondary dark:shadow-neu-dark-xs;
					}

					.neu-btn.active,
					.neu-btn:active {
						@apply text-primary shadow-neu-inset-sm;
						color: #767676;
						/* dark mode*/
						@apply dark:shadow-neu-dark-inset-xs;
					}

					.neu-btn:hover:not(.active),
					.neu-btn:focus:not(.active) {
						@apply text-primary transform scale-105;
					}

					.neu-btn-pill {
						@apply rounded-l-full rounded-r-full;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Only Icon Buttons">
			<div class="flex-center">
				<button class="neu-icon-only-btn neu-btn mr-3" type="button"><x-svg.sun class="size-7" /></button>
				<button class="neu-icon-only-btn neu-btn active mr-6" type="button"><x-svg.truck class="size-7" /></button>
				<button class="neu-icon-only-square-btn neu-btn mr-3" type="button"><x-svg.moon class="size-7" /> </button>
				<button class="neu-icon-only-square-btn neu-btn active mr-3" type="button"><x-svg.mail class="size-7" /></button>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-icon-only-btn {
						@apply rounded-full bg-btn-gradient p-2 shadow-neu-md-soft;
						/* dark mode */
						@apply dark:shadow-neu-dark-md dark:bg-none;
					}

					.neu-icon-only-square-btn {
						@apply rounded-lg bg-btn-gradient p-2 shadow-neu-md-soft;
						/* dark mode    */
						@apply dark:shadow-neu-dark-md dark:bg-none;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Icon Buttons">
			<div class="flex-center">
				<button class="neu-icon-btn neu-btn text-primary mr-3" type="button"><x-svg.sun class="size-7" /> Primary</button>
				<button class="neu-icon-btn neu-btn text-secondary mr-3" type="button"><x-svg.moon class="size-7" /> Secondary</button>
				<button class="neu-icon-btn neu-btn mr-3 text-green-700" type="button"><x-svg.mail class="size-7" /> Success</button>
				<button class="neu-icon-btn neu-btn mr-3 text-red-700" type="button"><x-svg.heart class="size-7" /> Danger</button>
				<button class="neu-icon-btn neu-btn text-primary active mr-3" type="button"><x-svg.truck class="size-7" /> Active</button>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-icon-btn {
						@apply flex justify-center items-center gap-2 text-sm;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Loading Buttons">
			<div class="flex-center">
				<button class="neu-btn neu-icon-only-btn text-primary mr-3" type="button"><x-svg.loading class="size-6" /></button>
				<button class="neu-btn neu-icon-btn text-secondary mr-3" type="button"><x-svg.loading class="size-6" />Loading...</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Button Sizes">
			<div class="flex-center">
				<button class="neu-btn neu-btn-sm text-primary mr-3" type="button">Small</button>
				<button class="neu-btn text-primary mr-3" type="button">Default</button>
				<button class="neu-btn neu-btn-lg text-primary mr-3" type="button">Large</button>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-btn-sm {
						@apply py-1 px-2 text-xs;
					}

					.neu-btn-lg {
						@apply py-3 px-4 text-base;
					}

					.neu-btn-xl {
						@apply py-4 px-5 text-lg;
					}
				</style>
			</x-slot>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Buttons</x-sidenav-list>
		<x-sidenav-list>Button Pill</x-sidenav-list>
		<x-sidenav-list>Only Icon Buttons</x-sidenav-list>
		<x-sidenav-list>Icon Buttons</x-sidenav-list>
		<x-sidenav-list>Loading Buttons</x-sidenav-list>
		<x-sidenav-list>Button Sizes</x-sidenav-list>
	</x-slot>

</x-app-layout>
