<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    // log the user out
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
};
?>

<nav class="bg-secondary mb-[.5px] shadow shadow-gray-400 dark:shadow-gray-500" x-data="{ open: false }">
	<!-- Primary Navigation Menu -->
	<div class="mx-auto max-w-7xl">
		<div class="flex h-16 justify-between">
			<div class="flex">

				<!-- Hamburger -->
				<div class="flex items-center md:hidden">
					<button class="hover:bg-secondary hover:text-secondary focus:text-secondary text-primary focus:bg-primary inline-flex items-center justify-center rounded-md p-2 transition duration-150 ease-in-out focus:outline-none" @click="sidenav_open = ! sidenav_open">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path class="inline-flex" :class="{ 'hidden': sidenav_open, 'inline-flex': !sidenav_open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
							<path class="hidden" :class="{ 'hidden': !sidenav_open, 'inline-flex': sidenav_open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>

				<!-- Dark Mode Toggle -->
				<div class="mx-3 flex shrink-0 items-center sm:mr-10">
					<button class="size-12 flex cursor-pointer appearance-none items-center justify-center rounded-full shadow-neu-sun outline-none dark:border-dark-secondary dark:bg-dark-primary dark:shadow-neu-moon" id="toggleDarkMode" title="Toggle Dark Mode">
						<x-svg.sun class="block h-6 w-6 dark:hidden" />
						<x-svg.moon class="hidden h-6 w-6 dark:block" />
					</button>
				</div>

				<!-- Logo -->
				<div class="flex shrink-0 items-center">
					<a href="{{ route('home') }}" wire:navigate>
						<x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-dark-text-secondary" />
					</a>
				</div>

				<!-- Navigation Links -->
				<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
					<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
						{{ __('Dashboard') }}
					</x-nav-link>
				</div>
			</div>

			@auth
				<!-- Settings Dropdown -->
				<div class="hidden sm:ms-6 sm:flex sm:items-center">
					<x-dropdown align="right" width="48">
						<x-slot name="trigger">
							<button class="text-secondary hover:text-primary bg-primary inline-flex items-center rounded-md border border-transparent px-3 py-2 text-sm font-medium leading-4 transition duration-150 ease-in-out focus:outline-none">
								<div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

								<div class="ms-1">
									<svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
										<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
									</svg>
								</div>
							</button>
						</x-slot>

						<x-slot name="content">
							<x-dropdown-link :href="route('profile')" wire:navigate>
								{{ __('Profile') }}
							</x-dropdown-link>

							<!-- Authentication -->
							<button class="w-full text-start" wire:click="logout">
								<x-dropdown-link>
									{{ __('Log Out') }}
								</x-dropdown-link>
							</button>
						</x-slot>
					</x-dropdown>
				</div>

				<!-- Hamburger -->
				<div class="flex items-center sm:hidden">
					<button class="hover:bg-secondary hover:text-secondary focus:text-secondary text-primary focus:bg-primary inline-flex items-center justify-center rounded-md p-2 transition duration-150 ease-in-out focus:outline-none" @click="open = ! open">
						<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
							<path class="inline-flex" :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
							<path class="hidden" :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</button>
				</div>
			@else
				<div class="hidden sm:flex sm:items-center">
					<x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
						{{ __('Log in') }}
					</x-nav-link>

					<x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
						{{ __('Register') }}
					</x-nav-link>
				</div>
			@endauth

		</div>
	</div>

	<!-- Responsive Navigation Menu -->
	<div class="hidden sm:hidden" :class="{ 'block': open, 'hidden': !open }">
		<div class="space-y-1 pb-3 pt-2">
			<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
				{{ __('Dashboard') }}
			</x-responsive-nav-link>
		</div>

		@auth
			<!-- Responsive Settings Options -->
			<div class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
				<div class="px-4">
					<div class="text-primary text-base font-medium" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
					<div class="text-secondary text-sm font-medium">
						{{ auth()->user()->email }}
					</div>
				</div>

				<div class="text-secondary mt-3 space-y-1">
					<x-responsive-nav-link :href="route('profile')" wire:navigate>
						{{ __('Profile') }}
					</x-responsive-nav-link>

					<!-- Authentication -->
					<button class="w-full text-start" wire:click="logout">
						<x-responsive-nav-link>
							{{ __('Log Out') }}
						</x-responsive-nav-link>
					</button>
				</div>
			</div>
		@endauth
	</div>
</nav>
