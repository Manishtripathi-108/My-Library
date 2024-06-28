@props(['title' => '', 'isNeumorphism' => false])

<div {{ $attributes->class(['col-span-1 flex w-full flex-col items-center justify-center lg:col-span-2', 'neu-shadow-inset p-4' => $isNeumorphism]) }}>
	<div class="transition-all hover:translate-y-1 active:translate-y-2">
		{{ $slot }}
	</div>
	<h3 class="karla-font mt-3 text-center text-xl tracking-wider">
		{{ $title }}
	</h3>
</div>
