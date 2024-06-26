<x-app-layout>

	<div class="m-10 flex flex-col gap-10">

		<div class="flex gap-10">

			@include('cards.badge-card')

			@include('cards.comment')

		</div>
		@include('cards.reflect-hover')
	</div>

</x-app-layout>
