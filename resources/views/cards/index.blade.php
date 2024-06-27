<x-app-layout>
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		<x-cards-section title="Card Components">

			<x-cards-section.card title="Basic Card Component">
				@include('cards.image-card', ['type' => 2])
			</x-cards-section.card>

			<x-cards-section.card title="Image Card Component">
				@include('cards.image-card', ['type' => 1])
			</x-cards-section.card>

			<x-cards-section.card title="Badge Card Component">
				@include('cards.badge-card')
			</x-cards-section.card>

			<x-cards-section.card title="Icon Card Component">
				@include('cards.icon-card')
			</x-cards-section.card>

		</x-cards-section>

		<x-cards-section title="Card Hover Components">

			<x-cards-section.card title="Reflect Hover Card Component">
				@include('cards.reflect-hover')
			</x-cards-section.card>

		</x-cards-section>
	</div>
</x-app-layout>
