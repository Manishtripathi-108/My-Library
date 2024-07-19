<x-app-layout>

	{{-- Content --}}
	<div class="flex flex-col items-center justify-center gap-y-5 px-5 md:px-2">
		{{-- ------------------------------ Login & Signup ----------------------------- --}}
		<x-grid title="Login & Signup">

			<x-slot name="description">
				Neumorphism Login & Signup Forms are a great way to display login and signup forms in a modern and sleek way.
			</x-slot>

			<x-grid.item title="Signup Form">
				@include('neumorphism.login-signup-form', ['type' => 'signup'])
			</x-grid.item>

			<x-grid.item title="Login & Signup Form">
				@include('neumorphism.login-signup-form', ['type' => 'log-sign'])
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-grid title="Product Cards">

			<x-slot name="description">
				Product Cards are a great way to display products in a modern and sleek way. They are useful for e-commerce websites.
			</x-slot>

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

		{{-- ------------------------------ Cards ----------------------------- --}}
		<x-grid title="Cards">

			<x-slot name="description">
				Cards are a great way to display information in a modern and sleek way. They are useful for displaying information in a structured manner.
			</x-slot>

			<x-grid.item title="Profile Card">
				@include('neumorphism.cards')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Buttons & Icons ----------------------------- --}}
		<x-grid title="Buttons & Icons">

			<x-slot name="description">
				Buttons are a great way to interact with your users. They can be used to perform actions, navigate to different pages, and more. Icons are a great way to display information in a visual manner.
			</x-slot>

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

			<x-slot name="description">
				Switches are a great way to toggle between two states. They are useful for settings, preferences, and more.
			</x-slot>

			<x-grid.item title="Switch">
				@include('neumorphism.switch')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Radio Buttons ----------------------------- --}}
		<x-grid title="Radio Buttons">

			<x-slot name="description">
				Radio Buttons are a great way to select one option from a list of options. They are useful for forms, settings, and more.
			</x-slot>

			<x-grid.item title="Radio Button">
				@include('neumorphism.radio-btn')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ Tab ----------------------------- --}}
		<x-grid title="Tab">

			<x-slot name="description">
				Tabs are a great way to display content in a structured manner. They are useful for displaying different sections of a page, such as settings, preferences, and more.
			</x-slot>

			<x-grid.item title="Tab">
				@include('neumorphism.tab')
			</x-grid.item>

		</x-grid>

		{{-- ------------------------------ It is What it is ----------------------------- --}}
		<x-grid title="It is What it is">

			<x-slot name="description">
				Neumorphism is a design trend that combines the principles of skeuomorphism and flat design. It is characterized by soft shadows, rounded corners, and subtle gradients. Neumorphism is a great way to create a modern and sleek user interface.
			</x-slot>

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
		<ul class="lg:ml-4">
			<x-sidenav-list>Signup Form</x-sidenav-list>
			<x-sidenav-list>Login & Signup Form</x-sidenav-list>
			<x-sidenav-list>Simple Card</x-sidenav-list>
			<x-sidenav-list>Product Without Shadow</x-sidenav-list>
			<x-sidenav-list>Product With Rating</x-sidenav-list>
			<x-sidenav-list>Featured Product Item</x-sidenav-list>
			<x-sidenav-list>Checkout Card</x-sidenav-list>
			<x-sidenav-list>Checkout Summary</x-sidenav-list>
			<x-sidenav-list>Checkout Summary 2</x-sidenav-list>
			<x-sidenav-list>Profile Card</x-sidenav-list>
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
