@props(['active'])

@php
	$classes = $active ?? false ? 'inline-flex items-center border-b-2 border-light-accent px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out focus:border-light-highlight focus:outline-none dark:border-dark-accent ' : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium leading-5 text-secondary transition duration-150 ease-in-out hover:border-light-accent hover:text-primary focus:border-light-accent focus:text-primary focus:outline-none dark:hover:border-dark-accent dark:focus:border-dark-accent ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
	{{ $slot }}
</a>
