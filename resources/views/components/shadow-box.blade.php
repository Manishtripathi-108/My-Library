@props(['slot' => 'Nothing To show please enter in between the element', 'shadowCss' => '', 'isDark' => false])

@php
	$cssClasses = [
	    'light' => 'bg-light-primary text-light-text',
	    'dark' => 'bg-dark-primary text-dark-text',
	];
@endphp

<div class="{{ $slot }} {{ $isDark ?? false ? $cssClasses['dark'] : $cssClasses['light'] }} on-scroll-animation size-40 cursor-custom-copy flex animate-swash-in cursor-pointer items-center justify-center rounded-2xl p-4 text-center text-sm tracking-wider" x-data="{ shadowCss: '{{ $shadowCss }}', result: '{{ $slot }}', originalResult: '{{ $slot }}' }" @click="copyToClipboard(shadowCss, (message) => { result = message; setTimeout(() => { result = originalResult; }, 5000); })">
	<span x-text="result"></span>
</div>
