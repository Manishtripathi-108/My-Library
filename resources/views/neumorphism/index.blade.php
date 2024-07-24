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
				<div class="bg-primary text-primary relative flex w-11/12 max-w-[350px] flex-col items-center rounded-2xl border-4 border-solid border-transparent bg-clip-padding p-12 text-center shadow-neu-xs after:absolute after:-bottom-1 after:-left-1 after:-right-1 after:-top-1 after:-z-10 after:block after:rounded-2xl dark:shadow-neu-dark-xs">
					<div class="size-44 relative overflow-hidden rounded-full">
						<img class="absolute left-2/4 top-2/4 aspect-auto w-full -translate-x-2/4 -translate-y-2/4 object-cover" src="{{ asset('images/square/blue-fox.png') }}" />
					</div>

					<h2 class="text-nowrap text-primary mt-6 text-2xl font-semibold">Ashborn GodSlayer</h2>
					<small class="text-secondary text-base">@ashborn_gs</small>
					<div class="flex-center mt-6">
						<button class="neu-btn neu-btn-pill px-5">Follow</button>
						<button class="neu-btn neu-icon-only-btn ml-3 p-2.5">
							<x-svg.upload class="size-6" />
						</button>
						<button class="neu-btn neu-icon-only-btn ml-3 p-2">
							<x-svg.3dots class="size-7" />
						</button>
					</div>

					<div class="flex-center mt-10">
						<a class="text-secondary mx-1.5 no-underline" href="#">
							<x-svg.twitter class="size-5" />
						</a>
						<a class="text-secondary mx-1.5 no-underline" href="#">
							<x-svg.facebook class="size-5" />
						</a>
						<a class="text-secondary mx-1.5 no-underline" href="#">
							<x-svg.instagram class="size-5" />
						</a>
					</div>
				</div>
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
				<div class="w-full" x-data="{ tab: 'credit' }">

					{{-- -------------------------- Tab-btn ------------------------- --}}
					<nav>
						<div class="mb-0 flex flex-col flex-wrap gap-x-5 pl-0 sm:flex-row">
							<button class="text-secondary neu-btn group cursor-pointer no-underline" type="button" :class="{ 'shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm text-primary': tab === 'credit' }" @click="tab = 'credit'">
								Credit Card
							</button>
							<button class="text-secondary neu-btn group cursor-pointer no-underline" type="button" :class="{ 'shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm text-primary': tab === 'paypal' }" @click="tab = 'paypal'">
								Paypal
							</button>
							<button class="text-secondary neu-btn group cursor-pointer no-underline" type="button" :class="{ 'shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm text-primary': tab === 'bank' }" @click="tab = 'bank'">
								Bank/Wire Transfer
							</button>
						</div>
					</nav>

					{{-- -------------------------- Tab-content ------------------------- --}}
					<div class="tab-content mt-4 max-w-[700px] lg:mt-12">

						{{-- -------------------------- Credit Card ------------------------- --}}
						<div x-show="tab === 'credit'" x-transition>
							<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-4 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

								{{-- -------------------------- Card Heading ------------------------- --}}
								<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
									<h3 class="text-lg">Card details</h3>
								</div>

								{{-- -------------------------- Card Details ------------------------- --}}
								<div class="p-6">
									<div class="flex flex-wrap justify-center">
										<div class="w-full px-4 md:w-4/5">
											<div class="mb-6">
												<label class="mb-1 block" for="card_name"><span class="text-secondary mb-10 text-xs">(Full name as displayed on card)</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="card_name" type="text" placeholder="Name on Card *" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="card_number">Card Number <span class="text-red-600">*</span></label>
												<div class="neu-input-group neu-input-group-prepend">
													<x-svg.card class="neu-input-icon" />
													<input class="neu-form-input" id="card_number" type="number" placeholder="0000 0000 0000 0000" required>
												</div>
											</div>
										</div>
										<div class="mb-3 w-full px-4 md:w-2/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="cvc">CVC <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cvc" type="number" placeholder="CVC" required>
											</div>
										</div>
										<div class="mb-3 w-full px-4 md:w-2/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="card_expiry">Card Expiry <span class="text-red-600">*</span></label>
												<div class="neu-input-group neu-input-group-prepend group">
													<x-svg.calender class="neu-input-icon" />
													<input class="neu-form-input" id="card_expiry" type="number" placeholder="MM / YY" required>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						{{-- -------------------------- Paypal ------------------------- --}}
						<div x-show="tab === 'paypal'" x-transition>
							<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-6 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

								{{-- -------------------------- Card Heading ------------------------- --}}
								<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
									<h3 class="text-lg">Paypal</h3>
								</div>

								{{-- -------------------------- Card Details ------------------------- --}}
								<div class="p-6">
									<div class="flex flex-wrap justify-center">
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="Full_Name">Full Name <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="Full_Name" type="text" placeholder="Full Name" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="Email">Email address <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="email1" type="email" placeholder="example@company.com" required>
											</div>
										</div>
										<div class="flex-center w-full">
											<button class="neu-btn neu-icon-btn px-4 py-2" type="submit">
												<x-svg.lock class="size-7" />
												Check out with Paypal
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						{{-- -------------------------- Bank/Wire Transfer ------------------------- --}}
						<div x-show="tab === 'bank'" x-transition>
							<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-6 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

								{{-- -------------------------- Card Heading ------------------------- --}}
								<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
									<h3 class="text-lg">Bank/Wire Transfer</h3>
								</div>

								{{-- -------------------------- Card Details ------------------------- --}}
								<div class="p-6">
									<div class="flex flex-wrap justify-center">
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="Email">Email address <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="email" type="email" placeholder="example@company.com" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="country">Country</label>
												<div x-data="{ selected: '' }">
													<select class="bg-primary text-primary *:text-secondary w-full rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="country" x-model="selected" :class="{ 'text-secondary': selected === '' }">
														<option value="" disabled selected>Choose...</option>
														<option value="1">United States</option>
														<option value="2">Germany</option>
														<option value="3">Canada</option>
													</select>
												</div>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="address">Address <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="address" type="text" placeholder="e.g. valhalla" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="city">City <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="city" type="text" placeholder="City" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="Zip">Zip/Postal code <span class="text-red-600">*</span></label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="Zip" type="text" placeholder="e.g. 123456" required>
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="Company_name">Company Name</label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="Company_name" type="text" placeholder="e.g. Ashborn LLC">
											</div>
										</div>
										<div class="w-full px-4 lg:w-4/5">
											<div class="mb-6">
												<label class="text-secondary mb-1 block text-sm" for="cartInputPhone3">Phone Number</label>
												<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputPhone3" type="number" placeholder="e.g. +(12)345 6789">
											</div>
										</div>

										<div class="w-full px-4 lg:w-4/5">
											<p class="text-secondary mb-6 text-xs">For Bank/Wire transfer, product delivery takes place only after payment is received in full. Paying by credit card usually offers you immediate access to the products you ordered.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
