@props(['id' => $attributes->get('id') ?? Str::slug($slot)])
<li class="text-nowrap flex items-center justify-start px-3 py-1 text-xs transition-colors">
	<a href="#{{ $id }}" :class="{ 'text-primary': activeId === '#{{ $id }}', 'text-secondary hover:text-primary': activeId !== '#{{ $id }}' }" @click.prevent="scrollToComponent('#{{ $id }}')">
		{{ $slot }}
	</a>
</li>
