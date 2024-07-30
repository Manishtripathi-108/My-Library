@props(['title' => '', 'contentClass' => '', 'htmlCode' => $slot, 'cssCode' => '', 'jsCode' => '', 'id' => $attributes->get('id') ?? Str::slug($title)])

<div id="{{ $id }}" x-data="{ code_open: false }" {{ $attributes->class(['col-span-1 grid-items w-full mt-10 border-b border-gray-600 pb-10']) }}>
	<h3 class="text-secondary mb-8 font-alegreya text-2xl font-bold tracking-wider">
		{{ ucwords($title) }}
	</h3>

	{{-- Content --}}
	<div class="flex-center {{ $contentClass }} flex-col rounded-lg border border-gray-600 p-5">

		<div class="on-scroll-animation size-full flex-center animate-swash-in">
			{{ $slot }}
		</div>

		{{-- Show Code Button --}}
		@if ($htmlCode != '' || $cssCode != '')
			<div class="flex-center mt-5 w-full border-t border-gray-600 pt-5">
				<button class="neu-btn neu-icon-btn text-xs" :class="{ 'active': code_open }" @click="code_open = !code_open">
					<x-svg.lock class="size-5" />
					SHOW CODE
				</button>
			</div>
		@endif
	</div>

	{{-- Code Tabs --}}
	@if ($htmlCode != '' || $cssCode != '')
		<div class="mx-auto mt-5 w-[85vw] rounded-lg border border-gray-600 pb-5 sm:w-[70vw] md:w-[55vw]" x-data="{ code_tab: 'html-code' }" x-cloak x-show="code_open" x-transition.duration.300ms>
			<div class="mb-5 flex w-full items-center gap-4 border-b border-gray-600 p-5">
				<button class="neu-btn text-xs" :class="{ 'active': code_tab === 'html-code' }" @click="code_tab = 'html-code'">
					HTML
				</button>
				@if ($cssCode != '')
					<button class="neu-btn text-xs" :class="{ 'active': code_tab === 'css-code' }" @click="code_tab = 'css-code'">
						CSS
					</button>
				@endif
				@if ($jsCode != '')
					<button class="neu-btn text-xs" :class="{ 'active': code_tab === 'script-code' }" @click="code_tab = 'script-code'">
						JS
					</button>
				@endif
			</div>

			<div class="p-5">
				{{-- HTML Code --}}
				<pre class="scrollbar-thin" x-show="code_tab === 'html-code'"><code class="language-html">{{ e($htmlCode) }}</code></pre>

				{{-- CSS Code --}}
				@if ($cssCode != '')
					<pre class="scrollbar-thin" x-show="code_tab === 'css-code'"><code class="language-css">{{ e($cssCode) }}</code></pre>
				@endif

				{{-- Script Code --}}
				@if ($jsCode != '')
					<pre class="scrollbar-thin" x-show="code_tab === 'script-code'"><code class="language-javascript">{{ e($jsCode) }}</code></pre>
				@endif
			</div>
		</div>
	@endif
</div>
