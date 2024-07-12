<nav class="bg-primary ml-10 mt-2 h-dvh px-2 py-5" id="nav-sidebar">

	@php
		$currentUrl = url()->current();
	@endphp

	<ul class="ml-4">
		<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-lg tracking-wide transition-all">
			<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Home</a>
		</li>

		<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-lg tracking-wide transition-all">
			<a class="{{ $currentUrl == route('neumorphism') ? 'text-accent text-lg' : '' }}" href="{{ route('neumorphism') }}">Neumorphism</a>
		</li>

		<li class="text-secondary flex flex-col items-start justify-center px-3 py-1 font-karla text-lg tracking-wide">
			<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Components</a>

			<ul class="ml-4 mt-2">
				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Accordions</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Alerts</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Badges</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Cards</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Bootstrap Carousels</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Breadcrumbs</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Buttons</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">E-Commerce</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Forms</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Icon boxes</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Modals</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Navs</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Navbars</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Pagination</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Popovers</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Tables</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Tabs</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Toasts</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Timelines</a>
				</li>

				<li class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm tracking-wide transition-all">
					<a class="{{ $currentUrl == route('home') ? 'text-accent text-lg' : '' }}" href="{{ route('home') }}">Tooltips</a>
				</li>

			</ul>
		</li>
	</ul>

</nav>

{{-- <div x-data="{ open: false }" class="flex h-screen">
    <div :class="open ? 'w-64' : 'w-20'" class="bg-gray-800 text-white transition-all duration-300">
        <button @click="open = ! open" class="p-4 focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="p-4" x-show="open" x-transition>
            <ul>
                <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700">Dashboard</a></li>
                <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700">Profile</a></li>
                <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700">Settings</a></li>
                <li class="mb-4"><a href="#" class="block p-2 hover:bg-gray-700">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="flex-1 p-10">
        <!-- Main content goes here -->
    </div>
</div> --}}
