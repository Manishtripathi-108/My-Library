<x-app-layout title="E-Commerce | Neumorphism">

	{{-- Content --}}
	<div class="flex flex-col items-center justify-center gap-y-5 p-5 md:px-2">

		{{-- ------------------------------ Product Cards ----------------------------- --}}
		<x-grid title="Product Cards">
			<x-slot name="description">
				Product cards are used to display products in a neat and organized way. They can be used in e-commerce websites to display products. They can be simple or complex depending on the requirements.
			</x-slot>

			<x-grid.item title="Simple Card">
				<div class="max-w-[350px] lg:w-full">
					<div class="flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu-lg dark:border-gray-700 dark:shadow-neu-dark-md">
						<img class="w-full rounded-t-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
						<div class="border-t border-gray-300 p-4 dark:border-gray-700">
							<a class="text-primary hover:text-accent font-karla text-xl font-bold tracking-wider" href="#">Future Watch</a>
							<div class="text-md mt-2 font-karla text-gray-600">₹7999.00</div>
						</div>
					</div>
				</div>
			</x-grid.item>

			<x-grid.item title="Product without shadow">
				<div class="max-w-[350px]">
					<div class="overflow-hidden rounded-lg">
						<img class="h-auto w-full rounded-lg border border-gray-300 dark:border-gray-700" src="{{ asset('images/square/watch.jpeg') }}" alt="" />

						<h3 class="mt-3 font-semibold">
							<a class="text-primary hover:text-accent font-karla text-xl font-bold tracking-wide transition-colors duration-300" href="">
								Future Watch 1
							</a>
						</h3>

						<div class="flex items-center gap-10 py-3">
							<div class="rounded-lg px-3 py-2 text-center font-karla shadow-neu-inset-sm dark:text-dark-text-secondary dark:shadow-neu-dark-inset-sm">
								₹7999.00
							</div>
							<a class="neu-btn dark:bg-dark dark:neu-dark-btn rounded-full bg-btn-gradient p-3 transition-colors duration-300 hover:bg-none hover:text-blue-500 active:shadow-neu-inset-sm dark:border-none dark:bg-none dark:text-dark-text-secondary dark:hover:text-blue-500" href="">
								<x-svg.cart class="h-6 w-6" />
							</a>
							<a class="neu-btn dark:bg-dark dark:neu-dark-btn rounded-full bg-btn-gradient p-3 transition-colors duration-300 hover:bg-none hover:text-pink-500 active:shadow-neu-inset-sm dark:border-none dark:bg-none dark:text-dark-text-secondary dark:hover:text-blue-500" href="">
								<x-svg.heart class="h-6 w-6" />
							</a>
						</div>
					</div>
				</div>
			</x-grid.item>

			<x-grid.item title="Product with Rating">
				<div class="max-w-[350px]">
					<div class="flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu-lg dark:border-gray-700 dark:shadow-neu-dark-md">
						<img class="w-full rounded-t-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
						<div class="border-t border-gray-300 p-4 dark:border-gray-700">
							<a class="text-primary hover:text-accent font-karla text-xl font-bold" href="#">
								Future Watch 2
							</a>
							<h3 class="text-md text-secondary mt-2 font-karla font-light">
								Future Watch is a smartwatch that is from the future. It has all the features that you can imagine.
							</h3>

							<div class="mt-3 flex">
								<x-star rating='4.7' />
								<span class="neu-badge dark:neu-dark-badge ml-2 px-2 py-1 font-karla text-sm">
									4.7
								</span>
							</div>

							<div class="mt-3 flex items-center justify-between">
								<span class="text-primary font-karla text-lg">
									₹7999.00
								</span>
								<a class="neu-icon-btn neu-btn dark:neu-dark-btn font-karla text-sm" href="#">
									<x-svg.add-to-cart class="size-5" />
									Add to cart
								</a>
							</div>
						</div>
					</div>
				</div>
			</x-grid.item>

			<x-grid.item title="featured product item">
				<div class="max-w-[350px] md:max-w-fit lg:max-w-full">
					<div class="flex flex-col break-words rounded-lg border border-gray-300 p-6 shadow-neu-lg dark:border-gray-700 dark:shadow-neu-dark-md">
						<div class="flex flex-col items-center md:flex-row">
							<a class="w-full md:w-1/4" href="#">
								<img class="w-full rounded-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
							</a>

							<div class="mt-4 w-full md:mt-0 md:w-1/2 md:px-4">
								<a class="text-primary hover:text-accent font-playfair font-bold tracking-wider" href="#">
									Future Watch Series 0
								</a>

								<div class="my-3 flex items-center">
									<x-star rating="4.7" />
									<span class="neu-badge ml-2 px-2 py-1 font-karla text-sm">
										4.7
									</span>
									<span class="ml-3 flex items-center font-karla text-sm text-green-600">
										<x-svg.cart class="size-5" />
										150 orders
									</span>
								</div>

								<p class="text-secondary font-karla text-sm tracking-wide">
									Future Watch Series 0 is a smartwatch that is from the future. It has all the features that you can imagine. It has a 4.7 rating and 150 orders.
								</p>
							</div>
							<div class="mt-4 flex w-full flex-col items-end md:mt-0 md:w-1/4">
								<div class="text-primary flex items-center">
									<span class="mr-2 font-karla text-red-600 line-through">₹7999.00</span>
									<span class="font-playfair text-xl">₹5999.00</span>
								</div>

								<span class="mt-1 flex items-center font-karla text-sm text-green-700">
									<x-svg.truck class="size-5 mr-1" />
									Free shipping
								</span>

								<div class="mt-4 w-5/6">
									<a class="neu-btn mb-3 inline-flex w-full items-center justify-center text-sm" href="#">
										Details
									</a>
									<a class="neu-icon-btn neu-btn w-full text-sm" href="#">
										<x-svg.add-to-cart class="size-5" />
										Wishlist
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</x-grid.item>
		</x-grid>

		{{-- ------------------------------ Checkout ----------------------------- --}}
		<x-grid title="Checkout">
			<x-slot name="description">
				Checkout is the final step in the e-commerce process. It is where the user confirms the order and makes the payment. It is important to make the checkout process as simple and easy as possible to increase the conversion rate.
			</x-slot>

			<x-grid.item title="Checkout Card">
				<div class="max-w-[350px] md:max-w-full">
					<div class="flex items-center gap-4 rounded-lg border border-gray-300 p-6 shadow-neu-lg dark:border-gray-700 dark:shadow-neu-dark-md">

						<a class="w-2/3 md:w-1/3" href="#">
							<img class="w-full rounded-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
						</a>

						<div class="flex w-full flex-col gap-3">
							<div class="flex flex-col justify-between gap-3 md:flex-row md:gap-0">
								<a class="text-primary hover:text-accent font-playfair text-sm tracking-wider md:text-xl" href="">
									Future Watch Series 0
								</a>
								<span class="text-primary font-playfair text-sm md:text-xl">₹199.00</span>
							</div>

							<ul class="text-secondary hidden pl-3 md:block">
								<li class="font-karla text-sm">Transport: Free transport</li>
								<li class="font-karla text-sm">Return: 1 month</li>
								<li class="font-karla text-sm">Warranty: 24 months</li>
							</ul>

							<div class="flex items-center">

								<label class="text-secondary font-playfair text-sm" for="checkout-card">Qty</label>
								<select class="bg-primary text-secondary ml-1 w-auto rounded-xl border border-light-secondary p-1 text-sm shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md md:p-2" id="checkout-card">
									<option selected>1</option>
									<option value="1">2</option>
									<option value="2">3</option>
									<option value="3">4</option>
								</select>

								<div class="ml-auto">
									<button class="neu-btn neu-icon-btn text-sm" type="button">
										<x-svg.trash class="md:size-5 size-4" />
										<span class="hidden md:block">Remove</span>
									</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			</x-grid.item>

			<x-grid.item title="Checkout summary">
				<div class="bg-primary rounded-lg p-3 shadow-neu-inset-md dark:shadow-neu-dark-inset-md">
					<div class="rounded-lg border border-light-secondary p-4 font-medium shadow-neu-lg dark:border-dark-secondary dark:shadow-neu-dark-md">
						<h3 class="text-primary font-playfair text-xl">Cart Summary</h3>
						<ul class="mt-4">
							<li class="text-secondary flex rounded-t-lg border border-b-0 border-light-secondary p-4 font-light dark:border-dark-secondary">
								<span class="font-karla">Subtotal</span>
								<span class="ml-auto font-karla">$398.00</span>
							</li>
							<li class="text-primary flex rounded-b-lg border border-light-secondary p-4 text-lg dark:border-dark-secondary">
								<span class="font-karla">Total</span>
								<span class="ml-auto font-karla">$398.00</span>
							</li>
						</ul>
						<a class="neu-btn mb-4 mt-6 block font-karla" href="#">Proceed to Checkout</a>
						<small class="text-secondary font-karla">Taxes may apply before placing an order.</small>
					</div>
				</div>
			</x-grid.item>

			<x-grid.item title="Checkout summary 2">
				<div class="max-w-[450px] md:max-w-full">
					<div class="bg-primary break-words rounded-lg border border-gray-300 p-6 shadow-neu-lg dark:border-gray-700 dark:shadow-neu-dark-md">
						<h3 class="text-primary mb-6 font-playfair text-xl">Items (2)</h3>

						{{-- item --}}
						<div class="mb-4 flex flex-wrap">
							<a class="w-2/3 md:w-1/3" href="#">
								<img class="w-full rounded-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
							</a>

							{{-- item details --}}
							<div class="relative max-w-full flex-1 flex-grow px-4">
								<a class="text-primary hover:text-accent font-playfair text-sm tracking-wider md:text-xl" href="">
									Future Watch Series 0
								</a>
								<ul class="text-secondary mt-4 pl-3">
									<li class="text-xs">Transport: Free transport</li>
									<li class="text-xs">Return: 1 month</li>
									<li class="text-xs">Warranty: 24 months</li>
								</ul>
							</div>
						</div>

						{{-- item --}}
						<div class="mb-4 flex flex-wrap">
							<a class="w-2/3 md:w-1/3" href="#">
								<img class="w-full rounded-lg" src="{{ asset('images/square/watch.jpeg') }}" alt="">
							</a>

							{{-- item details --}}
							<div class="relative max-w-full flex-1 flex-grow px-4">
								<a class="text-primary hover:text-accent font-playfair text-sm tracking-wider md:text-xl" href="">
									Future Watch Series 0
								</a>
								<ul class="text-secondary mt-4 pl-3">
									<li class="text-xs">Transport: Free transport</li>
									<li class="text-xs">Return: 1 month</li>
									<li class="text-xs">Warranty: 24 months</li>
								</ul>
							</div>
						</div>

						{{-- list & Btn --}}
						<div class="flex-center flex-col">
							<ul class="mt-3 flex w-full flex-col">
								<li class="text-secondary flex rounded-t-md border border-dark-secondary px-6 py-3">
									<span>Subtotal</span>
									<span class="ml-auto">$398.00</span>
								</li>
								<li class="text-secondary flex border border-y-0 border-dark-secondary px-6 py-3">
									<span>Tax</span>
									<span class="ml-auto">$18.00</span>
								</li>
								<li class="text-primary flex rounded-b border border-dark-secondary px-6 py-3 font-playfair font-medium">
									<span>Total</span>
									<span class="ml-auto">$416.00</span>
								</li>
							</ul>

							<a class="neu-btn bg-primary mb-3 mt-4 inline-block w-full select-none px-3 py-1" href="#">Place Order</a>
							<div class="text-secondary text-xs">
								By placing the order you are confirming that you are over 16 years of age and you agree with our
								<a class="text-highlight hover:text-accent font-karla" href="#">Terms and Conditions</a>.
							</div>
						</div>
					</div>
				</div>
			</x-grid.item>
		</x-grid>

		{{-- ------------------------------ Tab ----------------------------- --}}
		<x-grid title="Tab">
			<x-slot name="description">
				Tabs are used to organize content into different sections. They are used to display different types of content in a single container. They are used to save space and make the content more organized.
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
													<x-svg.calendar class="neu-input-icon" />
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

	</div>

	{{-- Right Sidenav --}}
	<x-slot name="rightSidenav">
		<x-sidenav-list>Product Cards</x-sidenav-list>
		<x-sidenav-list class="pl-2">Simple Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Product Without Shadow</x-sidenav-list>
		<x-sidenav-list class="pl-2">Product With Rating</x-sidenav-list>
		<x-sidenav-list class="pl-2">Featured Product Item</x-sidenav-list>

		<x-sidenav-list>Checkout</x-sidenav-list>
		<x-sidenav-list class="pl-2">Checkout Card</x-sidenav-list>
		<x-sidenav-list class="pl-2">Checkout Summary</x-sidenav-list>
		<x-sidenav-list class="pl-2">Checkout Summary 2</x-sidenav-list>
		<x-sidenav-list>Tab</x-sidenav-list>
	</x-slot>
</x-app-layout>
