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

		<div class="ml-2" x-cloak x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('neumorphism.accordions')" :active="request()->routeIs('neumorphism.accordions')" wire:navigate>
				{{ __('Accordions') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.alerts')" :active="request()->routeIs('neumorphism.alerts')" wire:navigate>
				{{ __('Alerts') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.authentications')" :active="request()->routeIs('neumorphism.authentications')" wire:navigate>
				{{ __('Authentications') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.badges')" :active="request()->routeIs('neumorphism.badges')" wire:navigate>
				{{ __('Badges') }}
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

			<x-sidenav-link class="text-xs" :href="route('neumorphism.carousels')" :active="request()->routeIs('neumorphism.carousels')" wire:navigate>
				{{ __('Carousels') }}
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

			<x-sidenav-link class="text-xs" :href="route('neumorphism.icons')" :active="request()->routeIs('neumorphism.icons')" wire:navigate>
				{{ __('Icons') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.modals')" :active="request()->routeIs('neumorphism.modals')" wire:navigate>
				{{ __('Modals') }}
			</x-sidenav-link>

			<x-sidenav-link class="text-xs" :href="route('neumorphism.navbars')" :active="request()->routeIs('neumorphism.navbars')" wire:navigate>
				{{ __('Navbars') }}
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
		</div>
	</div>

	{{-- Components --}}
	<div x-data="{ open: {{ request()->is('components/*') ? 'true' : 'false' }} }">
		<button class="cursor-pointer select-none px-3 py-1 transition-all" type="button" title="Components" style="-webkit-tap-highlight-color: transparent;" :class="{ 'text-primary': open, 'text-secondary hover:text-primary': !open }" @click="open = !open">
			{{ __('Components') }}
		</button>

		<div class="ml-2" x-cloak x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('accordions')" :active="request()->routeIs('accordions')" wire:navigate>
				{{ __('Accordions') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('alerts')" :active="request()->routeIs('alerts')" wire:navigate>
				{{ __('Alerts') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('animations')" :active="request()->routeIs('animations')" wire:navigate>
				{{ __('Animations') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('avatars')" :active="request()->routeIs('avatars')" wire:navigate>
				{{ __('Avatars') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('badges')" :active="request()->routeIs('badges')" wire:navigate>
				{{ __('Badges') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('breadcrumbs')" :active="request()->routeIs('breadcrumbs')" wire:navigate>
				{{ __('Breadcrumbs') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('buttons')" :active="request()->routeIs('buttons')" wire:navigate>
				{{ __('Buttons') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('cards')" :active="request()->routeIs('cards')" wire:navigate>
				{{ __('Cards') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('carousels')" :active="request()->routeIs('carousels')" wire:navigate>
				{{ __('Carousels') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('dialogs')" :active="request()->routeIs('dialogs')" wire:navigate>
				{{ __('Dialogs') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('dropdowns')" :active="request()->routeIs('dropdowns')" wire:navigate>
				{{ __('Dropdowns') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('forms')" :active="request()->routeIs('forms')" wire:navigate>
				{{ __('Forms') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('icons')" :active="request()->routeIs('icons')" wire:navigate>
				{{ __('Icons') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('lists')" :active="request()->routeIs('lists')" wire:navigate>
				{{ __('Lists') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('modals')" :active="request()->routeIs('modals')" wire:navigate>
				{{ __('Modals') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('notifications')" :active="request()->routeIs('notifications')" wire:navigate>
				{{ __('Notifications') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('pagination')" :active="request()->routeIs('pagination')" wire:navigate>
				{{ __('Paginations') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('progress-bars')" :active="request()->routeIs('progress-bars')" wire:navigate>
				{{ __('Progress Bars') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('sidebars')" :active="request()->routeIs('sidebars')" wire:navigate>
				{{ __('Sidebars') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('sliders')" :active="request()->routeIs('sliders')" wire:navigate>
				{{ __('Sliders') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('tables')" :active="request()->routeIs('tables')" wire:navigate>
				{{ __('Tables') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('tabs')" :active="request()->routeIs('tabs')" wire:navigate>
				{{ __('Tabs') }}
			</x-sidenav-link>
			<x-sidenav-link class="text-xs" :href="route('tooltips')" :active="request()->routeIs('tooltips')" wire:navigate>
				{{ __('Tooltips') }}
			</x-sidenav-link>
		</div>
	</div>

	{{-- BG-Pages --}}
	<div x-data="{ open: {{ request()->is('pages/*') ? 'true' : 'false' }} }">
		<button class="cursor-pointer select-none px-3 py-1 transition-all" type="button" title="Background Pages" style="-webkit-tap-highlight-color: transparent;" :class="{ 'text-primary': open, 'text-secondary hover:text-primary': !open }" @click="open = !open">
			{{ __('Background Pages') }}
		</button>

		<div class="ml-2" x-cloak x-show="open" x-transition>
			<x-sidenav-link class="text-xs" :href="route('404-pages')" :active="request()->routeIs('404-pages')" wire:navigate>
				{{ __('404') }}
			</x-sidenav-link>

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
