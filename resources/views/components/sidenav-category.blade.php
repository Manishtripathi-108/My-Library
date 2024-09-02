@props(['id' => $attributes->get('id') ?? Str::slug($slot)])

<div {{ $attributes->merge(['class' => 'mt-3 flex items-center justify-start text-sm transition-colors']) }}>
	<a href="#{{ $id }}" :class="{ 'text-primary': activeId === '#{{ $id }}', 'text-secondary hover:text-primary': activeId !== '#{{ $id }}' }" @click.prevent="scrollToComponent('#{{ $id }}')">
		{{ $slot }}
	</a>
</div>
