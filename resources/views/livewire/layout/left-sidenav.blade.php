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
			<x-sidenav-link class="text-xs" :href="route('neumorphism.accordions')" :active="request()->routeIs('neumorphism.accordions')" wire:navigate>
				{{ __('Accordions') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.alerts')" :active="request()->routeIs('neumorphism.alerts')" wire:navigate>
				{{ __('Alerts') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.badges')" :active="request()->routeIs('neumorphism.badges')" wire:navigate>
				{{ __('Badges') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.bootstrap-carousels')" :active="request()->routeIs('neumorphism.bootstrap-carousels')" wire:navigate>
				{{ __('Bootstrap Carousels') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.breadcrumbs')" :active="request()->routeIs('neumorphism.breadcrumbs')" wire:navigate>
				{{ __('Breadcrumbs') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.buttons')" :active="request()->routeIs('neumorphism.buttons')" wire:navigate>
				{{ __('Buttons') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.cards')" :active="request()->routeIs('neumorphism.cards')" wire:navigate>
				{{ __('Cards') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.clock')" :active="request()->routeIs('neumorphism.clock')" wire:navigate>
				{{ __('Clock') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.e-commerce')" :active="request()->routeIs('neumorphism.e-commerce')" wire:navigate>
				{{ __('E-Commerce') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.forms')" :active="request()->routeIs('neumorphism.forms')" wire:navigate>
				{{ __('Forms') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.icon-boxes')" :active="request()->routeIs('neumorphism.icon-boxes')" wire:navigate>
				{{ __('Icon Boxes') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.modals')" :active="request()->routeIs('neumorphism.modals')" wire:navigate>
				{{ __('Modals') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.navbars')" :active="request()->routeIs('neumorphism.navbars')" wire:navigate>
				{{ __('Navbars') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.navs')" :active="request()->routeIs('neumorphism.navs')" wire:navigate>
				{{ __('Navs') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.pagination')" :active="request()->routeIs('neumorphism.pagination')" wire:navigate>
				{{ __('Paginations') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.popovers')" :active="request()->routeIs('neumorphism.popovers')" wire:navigate>
				{{ __('Popovers') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.shadows')" :active="request()->routeIs('neumorphism.shadows')" wire:navigate>
				{{ __('Shadows') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.tables')" :active="request()->routeIs('neumorphism.tables')" wire:navigate>
				{{ __('Tables') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.tabs')" :active="request()->routeIs('neumorphism.tabs')" wire:navigate>
				{{ __('Tabs') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.timelines')" :active="request()->routeIs('neumorphism.timelines')" wire:navigate>
				{{ __('Timelines') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.toasts')" :active="request()->routeIs('neumorphism.toasts')" wire:navigate>
				{{ __('Toasts') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.tooltips')" :active="request()->routeIs('neumorphism.tooltips')" wire:navigate>
				{{ __('Tooltips') }}
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
