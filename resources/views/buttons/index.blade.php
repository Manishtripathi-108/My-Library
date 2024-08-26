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

		<x-grid.item title="Social Button">
			@include('buttons.social-btn')
		</x-grid.item>

		<x-grid.item title="Sliding Button">
			<button class="bg-secondary text-primary group relative h-14 w-48 rounded-2xl text-center text-xl font-semibold" type="button">
				<div class="bg-primary absolute left-1 top-1 z-10 flex h-12 w-1/4 items-center justify-center rounded-xl duration-500 group-hover:w-[184px]">
					<x-svg.left class="size-7" />
				</div>
				<p class="translate-x-2 font-alegreya">Go Back</p>
			</button>
		</x-grid.item>

		<x-grid.item title="Neumorphic Button">
			<div class="border-radius border-white-200 flex items-center justify-center overflow-hidden rounded-full border-2 bg-white p-1 shadow-lg">
				<button class="w-50 group group inline-flex h-16 overflow-visible rounded-full bg-[linear-gradient(#e9e9e9,#e9e9e9_50%,#fff)] p-1 transition-all duration-300">
					<div class="h-full w-full overflow-hidden rounded-full bg-[linear-gradient(to_top,#ececec,#fff)] p-1 shadow-[0_0_1px_rgba(0,0,0,0.07),0_0_1px_rgba(0,0,0,0.05),0_3px_3px_rgba(0,0,0,0.25),0_1px_3px_rgba(0,0,0,0.12)] duration-300 hover:shadow-none">
						<div class="black inline-flex h-full w-full items-center justify-center gap-4 gap-x-0.5 gap-y-0.5 overflow-hidden rounded-full bg-[linear-gradient(#f4f4f4,#fefefe)] px-4 py-2 text-[18px] text-xl font-medium text-[#101010] duration-200 group-hover:bg-[linear-gradient(#e2e2e2,#fefefe)] group-hover:text-blue-600">
							<svg id="Github" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" height="24" width="24">
								<path class="color5c6bc0 svgShape" d="M7.999 0C3.582 0 0 3.596 0 8.032a8.031 8.031 0 0 0 5.472 7.621c.4.074.546-.174.546-.387 0-.191-.007-.696-.011-1.366-2.225.485-2.695-1.077-2.695-1.077-.363-.928-.888-1.175-.888-1.175-.727-.498.054-.488.054-.488.803.057 1.225.828 1.225.828.714 1.227 1.873.873 2.329.667.072-.519.279-.873.508-1.074-1.776-.203-3.644-.892-3.644-3.969 0-.877.312-1.594.824-2.156-.083-.203-.357-1.02.078-2.125 0 0 .672-.216 2.2.823a7.633 7.633 0 0 1 2.003-.27 7.65 7.65 0 0 1 2.003.271c1.527-1.039 2.198-.823 2.198-.823.436 1.106.162 1.922.08 2.125.513.562.822 1.279.822 2.156 0 3.085-1.87 3.764-3.652 3.963.287.248.543.738.543 1.487 0 1.074-.01 1.94-.01 2.203 0 .215.144.465.55.386A8.032 8.032 0 0 0 16 8.032C16 3.596 12.418 0 7.999 0z" fill="#000000"></path>
							</svg>
							<span class="ml-2">Github</span>
						</div>
					</div>
				</button>
			</div>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		@php
			$sideList = ['Delete Button', 'Documents Button', 'Reflect Button', 'Arrow Buttons', 'Pattern Button', 'Jello Button', 'Popover Button', 'Social Button', 'Sliding Button', 'Neumorphic Button'];
		@endphp

		@foreach ($sideList as $link)
			<x-sidenav-list> {{ $link }} </x-sidenav-list>
		@endforeach

	</x-slot>

</x-app-layout>
