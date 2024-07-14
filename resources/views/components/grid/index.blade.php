@props(['title' => '', 'description' => ''])

<section {{ $attributes->merge(['class' => 'w-full']) }}>
	<h2 class="text-primary mb-3 font-playfair text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h2>

	@if ($description != '')
		<div class="text-secondary font-karla text-sm">
			{{ $description }}
		</div>
	@endif

	<div class="mb-2 grid place-items-center gap-4 p-3">

		{{ $slot }}

	</div>
</section>
