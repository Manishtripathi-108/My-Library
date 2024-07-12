@props(['title' => ''])

<section class="w-full">
	<h2 class="text-secondary mb-5 font-playfair text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h2>
	<div class="text-secondary font-karla text-sm">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quae aspernatur quam minima voluptas excepturi expedita neque saepe ullam culpa hic quo dolorem, natus eos nobis. In ducimus voluptatem doloribus!
	</div>

	<div class="mb-2 grid place-items-center gap-4 p-3">

		{{ $slot }}

	</div>
</section>
