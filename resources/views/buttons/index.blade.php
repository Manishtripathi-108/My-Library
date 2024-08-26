<x-app-layout title="Buttons">

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

		<x-grid.item title="Reflect Button">
			@include('buttons.reflect-btn')
		</x-grid.item>

		<x-grid.item title="Arrow Buttons">

			@include('buttons.arrow-btns')

			<x-slot name="cssCode">
				<style>
					@keyframes bounce-up {

						0%,
						100% {
							transform: translateY(0);
						}

						50% {
							transform: translateY(25%);
						}
					}

					.animate-bounce-up {
						animation: bounce-up 2s;
					}

					@keyframes bounce-down {

						0%,
						100% {
							transform: translateY(0);
						}

						50% {
							transform: translateY(-25%);
						}
					}

					.animate-bounce-down {
						animation: bounce-down 2s;
					}

					@keyframes bounce-left {

						0%,
						100% {
							transform: translateX(0);
						}

						50% {
							transform: translateX(25%);
						}
					}

					.animate-bounce-left {
						animation: bounce-left 2s;
					}

					@keyframes bounce-right {

						0%,
						100% {
							transform: translateX(0);
						}

						50% {
							transform: translateX(-25%);
						}
					}

					.animate-bounce-right {
						animation: bounce-right 2s;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Pattern Button">
			@include('buttons.pattern-btn')
		</x-grid.item>

		<x-grid.item title="Jello Button">
			@include('buttons.jello-btn')
		</x-grid.item>

		<x-grid.item title="Popover Button">
			@include('buttons.popover-btn')
		</x-grid.item>

	</x-grid>

</x-app-layout>
