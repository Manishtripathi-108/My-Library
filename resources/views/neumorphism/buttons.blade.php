<x-app-layout>

	<x-grid title="Buttons">

		<x-slot name="description">
			Buttons are used to initialize an action. Clicking on a button triggers an event or a series of events that result in an action. They are typically placed throughout your UI, in places like: dialogs, forms, cards, and toolbars.
		</x-slot>

		<x-grid.item title="Buttons">
			<div class="flex-center">
				<button class="neu-btn text-primary mr-2" type="button">Primary</button>
				<button class="neu-btn text-secondary mr-2" type="button">Secondary</button>
				<button class="neu-btn mr-2 text-green-700" type="button">Success</button>
				<button class="neu-btn mr-2 text-red-700" type="button">Danger</button>
				<button class="neu-btn text-primary active mr-2" type="button" disabled>Active</button>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
