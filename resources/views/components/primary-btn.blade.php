@props(['buttonAttributes' => ''])

<div class="{{ $buttonAttributes }} inline-flex items-center rounded-md shadow-sm">
	<button {{ $attributes->merge(['type' => 'submit', 'class' => 'cursor-pointer rounded-lg border-b-4 border-blue-600 bg-blue-500 px-6 py-2 text-white transition-all hover:-translate-y-[1px] hover:border-b-[6px] hover:brightness-110 active:translate-y-[2px] active:border-b-2 active:brightness-90']) }}>
		<span class="text-center font-karla tracking-wide">
			{{ $slot }}
		</span>
	</button>
</div>
