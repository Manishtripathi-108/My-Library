<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		<x-grid title="Card Components">

			<x-grid.item title="Basic Card Component" isNeumorphism='true'>
				@include('cards.image-card', ['type' => 2])
			</x-grid.item>

			<x-grid.item title="Image Card Component" isNeumorphism='true'>
				@include('cards.image-card', ['type' => 1])
			</x-grid.item>

			<x-grid.item title="Badge Card Component" isNeumorphism='true'>
				@include('cards.badge-card')
			</x-grid.item>

			<x-grid.item title="Icon Card Component" isNeumorphism='true'>
				@include('cards.icon-card')
			</x-grid.item>

			<x-grid.item title="Copy Page Card Component" isNeumorphism='true'>
				@include('cards.copy-page-card')
			</x-grid.item>

		</x-grid>

		<x-grid title="Card Hover Components">

			<x-grid.item title="Reflect Hover Card Component" isNeumorphism='true'>
				@include('cards.reflect-hover')
			</x-grid.item>

		</x-grid>
	</div>
</x-app-layout>
