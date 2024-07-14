<div>
	{{-- Home --}}
	<x-sidenav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
		{{ __('Home') }}
	</x-sidenav-link>

	{{-- Auth --}}
	<x-sidenav-link :href="route('auth.login-signup')" :active="request()->routeIs('auth.login-signup')" wire:navigate>
		{{ __('Auth Page') }}
	</x-sidenav-link>

	{{-- Neumorphism --}}
	<div x-data="{ open: {{ request()->is('neumorphism*') ? 'true' : 'false' }} }">
		<a class="cursor-pointer select-none px-3 py-1 transition-all" href="{{ route('neumorphism') }}" style="-webkit-tap-highlight-color: transparent;" wire:navigate :class="{ 'text-primary': open, 'text-secondary hover:text-primary': !open }" @click="open = !open">
			{{ __('Neumorphism') }}
		</a>

		<div class="ml-2" x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('neumorphism.shadows')" :active="request()->routeIs('neumorphism.shadows')" wire:navigate>
				{{ __('Neumorphism Shadows') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.clock')" :active="request()->routeIs('neumorphism.clock')" wire:navigate>
				{{ __('Neumorphism Clock') }}
			</x-sidenav-link>
		</div>
	</div>

	{{-- Components --}}
	<div x-data="{ open: {{ request()->is('components/*') ? 'true' : 'false' }} }">
		<span class="cursor-pointer select-none px-3 py-1 transition-all" style="-webkit-tap-highlight-color: transparent;" :class="{ 'text-primary': open, 'text-secondary hover:text-primary': !open }" @click="open = !open">
			{{ __('Components') }}
		</span>

		<div class="ml-2" x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('cards')" :active="request()->routeIs('cards')" wire:navigate>
				{{ __('Cards') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('buttons')" :active="request()->routeIs('buttons')" wire:navigate>
				{{ __('Buttons') }}
			</x-sidenav-link>
		</div>
	</div>

	{{-- BG-Pages --}}
	<div x-data="{ open: {{ request()->is('pages/*') ? 'true' : 'false' }} }">
		<span class="cursor-pointer select-none px-3 py-1 transition-all" style="-webkit-tap-highlight-color: transparent;" :class="{ 'text-primary': open, 'text-secondary hover:text-primary': !open }" @click="open = !open">
			{{ __('Background Pages') }}
		</span>

		<div class="ml-2" x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('book-page')" :active="request()->routeIs('book-page')" wire:navigate>
				{{ __('Book') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('background-building')" :active="request()->routeIs('background-building')" wire:navigate>
				{{ __('Background Building') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('background-sunrise')" :active="request()->routeIs('background-sunrise')" wire:navigate>
				{{ __('Background Sunrise') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('order-confirmation')" :active="request()->routeIs('order-confirmation')" wire:navigate>
				{{ __('Order Confirm') }}
			</x-sidenav-link>
		</div>

	</div>
</div>

