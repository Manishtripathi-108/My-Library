@props(['title' => '', 'isNeumorphism' => false])

<div {{ $attributes->class(['col-span-1 flex w-full flex-col items-center justify-center lg:col-span-2', 'shadow-neu-inset p-4' => $isNeumorphism]) }}>
	{{ $slot }}
	<h3 class="font-karla mt-4 text-center text-xl tracking-wider text-secondary">
		{{ ucwords($title) }}
	</h3>
</div>
