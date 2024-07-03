@props(['title' => ''])

<section class="w-full">
	<h2 class="font-playfair mb-5 text-center text-2xl font-bold tracking-wider -secondary dark:text-dark-text-secondary">
		{{ ucwords($title) }}
	</h2>

	<div class="mb-2 grid h-full grid-cols-1 items-center justify-center gap-4 border-b border-gray-600 p-3 md:grid-cols-3 lg:grid-cols-6">

		{{ $slot }}

	</div>
</section>
