@props(['active'])

@php
	$classes = $active ?? false ? 'block w-full border-l-4 border-light-accent bg-dim py-2 pe-4 ps-3 text-start text-base font-medium text-secondary transition duration-150 ease-in-out focus:border-light-highlight focus:bg-primary focus:text-primary focus:outline-none dark:border-indigo-600 dark:focus:border-dark-highlight' : 'block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium text-gray-600 transition duration-150 ease-in-out hover:border-gray-300 hover:bg-gray-50 focus:border-gray-300 focus:bg-gray-50 focus:text-gray-800 focus:outline-none text-secondary dark:hover:border-dark-accent dark:hover:bg-primary dark:focus:border-dark-accent ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
	{{ $slot }}
</a>
