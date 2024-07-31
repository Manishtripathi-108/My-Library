@props(['id' => $attributes->get('id') ?? Str::slug($slot)])

<div {{ $attributes->merge(['class' => 'mt-2 flex items-center justify-start text-xs transition-colors']) }}>
	<a href="#{{ $id }}" :class="{ 'text-primary': activeId === '#{{ $id }}', 'text-secondary hover:text-primary': activeId !== '#{{ $id }}' }" @click.prevent="scrollToComponent('#{{ $id }}')">
		{{ $slot }}
	</a>
</div>
