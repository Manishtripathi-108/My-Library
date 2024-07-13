@props(['id' => $attributes->get('id') ?? Str::slug($slot)])
<li class="flex items-center justify-start mt-2 text-xs transition-colors">
	<a href="#{{ $id }}" :class="{ 'text-primary': activeId === '#{{ $id }}', 'text-secondary hover:text-primary': activeId !== '#{{ $id }}' }" @click.prevent="scrollToComponent('#{{ $id }}')">
		{{ $slot }}
	</a>
</li>
