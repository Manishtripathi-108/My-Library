@props(['title' => ''])

<div {{ $attributes->merge(['class' => 'col-span-1 flex w-full flex-col items-center justify-center lg:col-span-2 neu-shadow-inset p-4']) }}>
	<a class="cursor-pointer transition-all hover:-translate-y-[1px] active:translate-y-[2px]" href="">
		{{ $slot }}
	</a>
	<h3 class="karla-font mt-3 text-center text-xl tracking-wider">
		{{ $title }}
	</h3>
</div>
