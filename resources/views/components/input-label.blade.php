@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-primary dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
