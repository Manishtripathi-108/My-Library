<x-app-layout>

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
		</x-grid.item>

		<x-grid.item title="Button Pill">
			<div class="flex-center">
				<button class="neu-btn neu-btn-pill text-primary mr-3" type="button">Primary</button>
				<button class="neu-btn neu-btn-pill text-secondary mr-3" type="button">Secondary</button>
				<button class="neu-btn neu-btn-pill mr-3 text-green-700" type="button">Success</button>
				<button class="neu-btn neu-btn-pill mr-3 text-red-700" type="button">Danger</button>
				<button class="neu-btn neu-btn-pill text-primary active mr-3" type="button">Active</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Only Icon Buttons">
			<div class="flex-center">
				<button class="neu-icon-only-btn neu-btn mr-3" type="button"><x-svg.sun class="size-7" /></button>
				<button class="neu-icon-only-btn neu-btn active mr-6" type="button"><x-svg.truck class="size-7" /></button>
				<button class="neu-icon-only-square-btn neu-btn mr-3" type="button"><x-svg.moon class="size-7" /> </button>
				<button class="neu-icon-only-square-btn neu-btn active mr-3" type="button"><x-svg.mail class="size-7" /></button>
			</div>
		</x-grid.item>

		<x-grid.item title="Icon Buttons">
			<div class="flex-center">
				<button class="neu-icon-btn neu-btn text-primary mr-3" type="button"><x-svg.sun class="size-7" /> Primary</button>
				<button class="neu-icon-btn neu-btn text-secondary mr-3" type="button"><x-svg.moon class="size-7" /> Secondary</button>
				<button class="neu-icon-btn neu-btn mr-3 text-green-700" type="button"><x-svg.mail class="size-7" /> Success</button>
				<button class="neu-icon-btn neu-btn mr-3 text-red-700" type="button"><x-svg.heart class="size-7" /> Danger</button>
				<button class="neu-icon-btn neu-btn text-primary active mr-3" type="button"><x-svg.truck class="size-7" /> Active</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Loading Buttons">
			<div class="flex-center">
				<button class="neu-btn neu-icon-only-btn text-primary mr-3" type="button"><x-svg.loading class="size-6"/></button>
				<button class="neu-btn neu-icon-btn text-secondary mr-3" type="button"><x-svg.loading class="size-6"/>Loading...</button>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
