@props(['active'])

@php
	$classes = $active ?? false ? 'block w-full border-l-4 border-light-accent bg-light-primary-dim py-2 pe-4 ps-3 text-start text-base font-medium text-light-text-secondary transition duration-150 ease-in-out focus:border-light-highlight focus:bg-light-primary focus:text-light-text focus:outline-none dark:border-indigo-600 dark:bg-dark-primary-dim dark:text-dark-text-secondary dark:focus:border-dark-highlight dark:focus:bg-dark-primary dark:focus:text-dark-text' : 'block w-full border-l-4 border-transparent py-2 pe-4 ps-3 text-start text-base font-medium text-gray-600 transition duration-150 ease-in-out hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800 focus:border-gray-300 focus:bg-gray-50 focus:text-gray-800 focus:outline-none dark:text-dark-text-secondary dark:hover:border-dark-accent dark:hover:bg-dark-primary dark:hover:text-dark-text dark:focus:border-dark-accent dark:focus:bg-dark-primary dark:focus:text-dark-text';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
	{{ $slot }}
</a>
