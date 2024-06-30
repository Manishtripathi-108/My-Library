@props(['title' => '', 'isNeumorphism' => false])

<div {{ $attributes->class(['col-span-1 flex w-full flex-col items-center justify-center lg:col-span-2', 'neu-shadow-inset-sm p-4' => $isNeumorphism]) }}>
	{{ $slot }}
	<h3 class="karla-font mt-3 text-center text-xl tracking-wider">
		{{ ucwords($title) }}
	</h3>
</div>
