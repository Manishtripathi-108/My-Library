<x-app-layout>

	{{-- Header --}}
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-dark-text">
			{{ __('Neumorphism UI') }}
		</h2>
	</x-slot>

	{{-- Sidebar --}}
	<x-slot name="leftSidenav">
		@include('neumorphism.partials.side-nav')
	</x-slot>

	{{-- Content --}}
	<div class="flex flex-col items-center justify-center gap-y-5 p-5">
		{{-- ------------------------------ Login & Signup ----------------------------- --}}
		<x-grid title="Login & Signup">

			<x-grid.item title="Signup Form">
				@include('neumorphism.login-signup-form', ['type' => 'signup'])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-grid title="Product Cards">

			<x-grid.item title="Simple Card">
				@include('neumorphism.product-card')
			</x-grid.item>

			<x-grid.item title="Product without shadow">
				@include('neumorphism.product-card', ['type' => 1])
			</x-grid.item>

			<x-grid.item title="Product with Rating">
				@include('neumorphism.product-card', ['type' => 2])
			</x-grid.item>

			<x-grid.item title="featured product item">
				@include('neumorphism.product-card', ['type' => 3])
			</x-grid.item>

			<x-grid.item title="Checkout Card">
				@include('neumorphism.product-card', ['type' => 4])
			</x-grid.item>

			<x-grid.item title="Checkout summary">
				@include('neumorphism.product-card', ['type' => 5])
			</x-grid.item>

			<x-grid.item title="Checkout summary 2">
				@include('neumorphism.product-card', ['type' => 6])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Buttons & Icons ----------------------------- --}}
		<x-grid title="Buttons & Icons">

			<x-grid.item title="Color Change Icons">
				@include('neumorphism.icons')
			</x-grid.item>

			{{-- Hamburger --}}
			<x-grid.item title="hamburger">
				@include('neumorphism.icons', ['type' => 1])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Switches ----------------------------- --}}
		<x-grid title="Switches">

			<x-grid.item title="Switch">
				@include('neumorphism.switch')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Radio Buttons ----------------------------- --}}
		<x-grid title="Radio Buttons">

			<x-grid.item title="Radio Button">
				@include('neumorphism.radio-btn')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Tab ----------------------------- --}}
		<x-grid title="Tab">

			<x-grid.item title="Tab">
				@include('neumorphism.tab')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ It is What it is ----------------------------- --}}
		<x-grid title="It is What it is">

			<x-grid.item title="Some Bars">

				<div class="mt-6 flex flex-row">
					<div class="-mt-24 flex h-72 w-2/3 justify-between gap-5 pb-2 pl-10">
						<div class="flex flex-col justify-end">
							<div class="flex h-32 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
								<div class="bg-primary h-24 w-full rounded-3xl"></div>
							</div>
							<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
								<div class="bg-primary h-5 w-5 rounded-full"></div>
							</div>
						</div>
						<div class="flex flex-col justify-end">
							<div class="flex h-28 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
								<div class="bg-secondary h-16 w-full rounded-3xl"></div>
							</div>
							<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
								<div class="bg-secondary h-5 w-5 rounded-full"></div>
							</div>
						</div>
						<div class="flex flex-col justify-end">
							<div class="flex h-52 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
								<div class="bg-accent h-44 w-full rounded-3xl"></div>
							</div>
							<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
								<div class="bg-accent h-5 w-5 rounded-full"></div>
							</div>
						</div>
						<div class="flex flex-col justify-end">
							<div class="flex h-36 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
								<div class="bg-highlight h-24 w-full rounded-3xl"></div>
							</div>
							<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
								<div class="bg-highlight h-5 w-5 rounded-full"></div>
							</div>
						</div>
						<div class="flex flex-col justify-end">
							<div class="flex h-44 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
								<div class="bg-dim h-32 w-full rounded-3xl"></div>
							</div>
							<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
								<div class="bg-dim h-5 w-5 rounded-full"></div>
							</div>
						</div>
						{{-- <div class="flex flex-col justify-end">
								<div class="flex h-32 flex-col items-center justify-end rounded-3xl shadow-neu-inset-xs dark:shadow-neu-dark-inset-xs">
									<div class="h-24 w-full rounded-3xl bg-green-700"></div>
								</div>
								<div class="mt-2 flex h-8 w-8 items-center justify-center rounded-full shadow-neu-xs dark:shadow-neu-dark-xs">
									<div class="h-5 w-5 rounded-full bg-green-700"></div>
								</div>
							</div> --}}
					</div>
				</div>

			</x-grid.item>

		</x-grid>

	</div>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<ul class="ml-4">
			<x-sidenav-list>Signup Form</x-sidenav-list>
			<x-sidenav-list>Simple Card</x-sidenav-list>
			<x-sidenav-list>Product Without Shadow</x-sidenav-list>
			<x-sidenav-list>Product With Rating</x-sidenav-list>
			<x-sidenav-list>Featured Product Item</x-sidenav-list>
			<x-sidenav-list>Checkout Card</x-sidenav-list>
			<x-sidenav-list>Checkout Summary</x-sidenav-list>
			<x-sidenav-list>Checkout Summary 2</x-sidenav-list>
			<x-sidenav-list>Color Change Icons</x-sidenav-list>
			<x-sidenav-list>Hamburger</x-sidenav-list>
			<x-sidenav-list>Switch</x-sidenav-list>
			<x-sidenav-list>Radio Button</x-sidenav-list>
			<x-sidenav-list>Tab</x-sidenav-list>
			<x-sidenav-list>Some Bars</x-sidenav-list>
		</ul>
	</x-slot>

	{{-- @pushOnce('scripts')
		<script>
			const gridItems = document.querySelectorAll('.grid-items');
			const navItems = document.querySelector('#right-sidenav');

			gridItems.forEach((item) => {
				const title = item.querySelector('h3').textContent;

				item.id = title.toLowerCase().replace(/ /g, '-');

				const li = document.createElement('li');
				li.innerHTML = `
					<a class="text-secondary hover:text-accent flex items-center justify-start px-3 py-1 font-karla text-sm text-nowrap tracking-wide transition-all" href="#${item.id}">
						${title}
					</a>
				`;

				navItems.appendChild(li);
			});
		</script>
	@endPushOnce --}}
</x-app-layout>
