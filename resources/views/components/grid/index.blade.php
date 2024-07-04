@props(['title' => ''])

<section class="w-full">
	<h2 class="text-secondary mb-5 text-center font-playfair text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h2>

	<div class="mb-2 grid h-full grid-cols-1 place-items-center justify-center gap-4 border-b border-gray-600 p-3 md:grid-cols-3 lg:grid-cols-6">

		{{ $slot }}

	</div>
</section>
