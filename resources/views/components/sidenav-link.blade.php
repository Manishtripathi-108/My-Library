@props(['active', 'listClasses' => ''])

@php
	$classes = $active ?? false ? 'text-primary px-3 py-1 transition-all' : 'text-secondary hover:text-primary px-3 py-1 transition-all';
@endphp

<li class="{{ $listClasses }} flex items-center justify-start">
	<a {{ $attributes->merge(['class' => $classes]) }}>
		{{ $slot }}
	</a>
</li>
