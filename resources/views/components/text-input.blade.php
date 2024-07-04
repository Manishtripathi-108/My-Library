@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-light-secondary dark:border-dark-secondary dark:bg-dark-primary dark:text-gray-300 focus:border-indigo-500 dark:focus:border-white focus:ring-indigo-500 dark:focus:ring-white rounded-md shadow-sm']) !!}>
