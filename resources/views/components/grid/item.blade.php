@props(['title' => '', 'isNeumorphism' => false])

<div x-data="{ code_open: false }" {{ $attributes->class(['col-span-1 w-full mt-10 border-b border-gray-600 pb-5', 'shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm p-4' => $isNeumorphism]) }}>
	<h3 class="text-secondary mb-8 font-alegreya text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h3>

	<div class="flex-center flex-col rounded-lg border border-gray-600 px-5 pt-5">

		{{ $slot }}

		{{-- Show Code Button --}}
		<div class="flex-center mt-5 w-full border-t border-gray-600 p-5">
			<button class="neu-btn neu-icon-btn text-xs" :class="{ 'active': code_open }" @click="code_open = !code_open">
				<x-svg.lock class="size-5" />
				SHOW CODE
			</button>
		</div>
	</div>

	{{-- Code Tabs --}}
	<div class="mx-auto mt-5 w-[60vw] rounded-lg border border-gray-600 pb-5" x-data="{ code_tab: 'html-code' }" x-show="code_open" x-transition>
		<div class="mb-5 flex w-full items-center gap-4 border-b border-gray-600 p-5">
			<button class="neu-btn text-xs" :class="{ 'active': code_tab === 'html-code' }" @click="code_tab = 'html-code'">
				HTML
			</button>
			<button class="neu-btn text-xs" :class="{ 'active': code_tab === 'css-code' }" @click="code_tab = 'css-code'">
				CSS
			</button>
		</div>

		<div class="p-5">
			<pre class="text-secondary scrollbar-thin overflow-x-auto text-sm leading-normal" x-show="code_tab === 'html-code'">
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

			<pre class="text-secondary scrollbar-thin overflow-x-auto text-sm leading-normal" x-show="code_tab === 'css-code'">
            /* CSS code goes here */
        	</pre>
		</div>
	</div>

</div>
