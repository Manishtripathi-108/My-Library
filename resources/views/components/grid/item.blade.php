@props(['title' => '', 'isNeumorphism' => false])

<div {{ $attributes->class(['col-span-1 w-full mt-10 border-b border-gray-600 pb-5', 'shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm p-4' => $isNeumorphism]) }}>
	<h3 class="text-secondary mb-8 font-alegreya text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h3>

	<div class="flex-center flex-col rounded-lg border border-gray-600 pt-5">

		{{ $slot }}

		<div class="flex-center mt-5 w-full border-t border-gray-600 p-5">
			<button class="neu-btn neu-icon-btn text-xs">
				<x-svg.lock class="size-5" />
				SHOW CODE
			</button>
		</div>
	</div>

	<div class="mt-5 rounded-lg border border-gray-600 pb-5">
		<div class="mb-5 flex w-full items-center gap-4 border-b border-gray-600 p-5">
			<button class="neu-btn text-xs">
				HTML
			</button>
			<button class="neu-btn text-xs">
				CSS
			</button>
		</div>

		<div class="p-5">
			<pre class="text-secondary scrollbar-thin w-[60vw] overflow-x-auto text-sm leading-normal">
			  @php
				echo htmlspecialchars(
				    '<div class="flex-center thin-scrollbar mt-5 w-full border-t border-gray-600 p-5">
					<button class="neu-btn neu-icon-btn text-xs">
					  <x-svg.lock class="size-5" />
					  SHOW CODE
					</button>
				  </div>
				  lorem 5 lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quae aspernatur quam minima voluptas excepturi expedita neque saepe ullam culpa hic quo dolorem, natus eos nobis. In ducimus voluptatem doloribus!
				  ',
				    ENT_QUOTES,
				    'UTF-8',
				);
			@endphp
			</pre>
		</div>

	</div>
</div>
