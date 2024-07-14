@props(['title' => '', 'description' => ''])

<section class="w-full">
	<h2 class="text-primary mb-3 font-playfair text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h2>
	<div class="text-secondary font-karla text-sm">
		{{ $description }}
	</div>

	<div class="mb-2 grid place-items-center gap-4 p-3">

		{{ $slot }}

	</div>
</section>
