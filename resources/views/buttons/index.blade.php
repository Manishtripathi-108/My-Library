<x-app-layout>

	<x-grid title="Buttons">
		<x-slot name="description">
			Buttons are used to interact with the user, they can be used to submit forms, navigate to other pages, or trigger actions.
		</x-slot>

		<x-grid.item title="Delete Button">
			@include('buttons.del-btn')
		</x-grid.item>

		<x-grid.item title="Documents Button">
			@include('buttons.docs-btn')
		</x-grid.item>

	</x-grid>

</x-app-layout>
