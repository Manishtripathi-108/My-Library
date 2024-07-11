<x-app-layout title="Welcome Page">
	<x-slot name="header">
		<h2 class="text-secondary text-xl font-semibold leading-tight dark:text-dark-text">
			{{ __('Welcome To Home Page') }}
		</h2>
	</x-slot>
	<div class="*:flex *:text-xs *:items-center *:justify-center m-5 grid grid-cols-4 gap-4 md:grid-cols-8">
		{{-- Auth --}}
		<a class="neu-btn" href="{{ route('register') }}">Register</a>
		<a class="neu-btn" href="{{ route('login') }}">Login</a>

		{{-- Pages --}}
		<a class="neu-btn" href="{{ route('book-page') }}">Book</a>
		<a class="neu-btn" href="{{ route('background-building') }}">Background Building</a>
		<a class="neu-btn" href="{{ route('background-sunrise') }}">Background Sunrise</a>
		<a class="neu-btn" href="{{ route('order-confirmation') }}">Order Confirm</a>

		{{-- Auth Page --}}
		<a class="neu-btn" href="{{ route('auth.login-signup') }}">Auth Page</a>

		{{-- Cards --}}
		<a class="neu-btn" href="{{ route('cards') }}">Cards</a>

		{{-- Buttons --}}
		<a class="neu-btn" href="{{ route('buttons') }}">Buttons</a>

		{{-- Neumorphism --}}
		<a class="neu-btn" href="{{ route('neumorphism') }}">Neumorphism</a>
		<a class="neu-btn" href="{{ route('neumorphism.shadows') }}">Neumorphism Shadows</a>

	</div>

	<div class="flex-center mt-10 p-10" x-data="{ tab: 'credit' }">
		<div class="w-full">

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
				<div x-show="tab === 'credit'">
					<div class="border-1 bg-primary mb-4 flex min-w-0 flex-col break-words rounded border p-4 shadow-neu-md-soft dark:shadow-neu-dark-md">
						{{-- -------------------------- Card Heading ------------------------- --}}
						<div class="text-primary border-b border-gray-300 p-4">
							<h3 class="text-lg">Card details</h3>
						</div>
						{{-- -------------------------- Card Details ------------------------- --}}
						<div class="p-6">
							<div class="flex flex-wrap justify-center">
								<div class="w-full px-4 md:w-4/5">
									<div class="mb-4">
										<label class="block mb-1" for="card_name"><span class="text-secondary mb-10 text-xs">(Full name as displayed on card)</span></label>
										<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="card_name" type="text" placeholder="Name on Card *" required>
									</div>
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<div class="mb-4">
										<label class="block mb-1 text-secondary text-sm" for="card_number">Card Number <span class="text-red-600">*</span></label>
										<div class="neu-inset-icon-input-container group">
											<x-svg.card class="group-hover:text-primary neu-inset-icon-input-icon" />
											<input class="neu-inset-icon-input group-hover:placeholder:text-primary" id="card_number" type="number" placeholder="0000 0000 0000 0000" required>
										</div>
									</div>
								</div>
								<div class="mb-3 w-full px-4 md:w-2/5">
									<div class="mb-4">
										<label class="block mb-1 text-secondary text-sm" for="cvc">CVC <span class="text-red-600">*</span></label>
										<input class="bg-primary hover:placeholder:text-primary text-primary placeholder:text-secondary w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 font-karla shadow-neu-inset-md placeholder:tracking-wide dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cvc" type="number" placeholder="CVC" required>
									</div>
								</div>
								<div class="mb-3 w-full px-4 md:w-2/5">
									<div class="mb-4">
										<label class="block mb-1 text-secondary text-sm" for="cardExpiryLabel">Card Expiry <span class="text-red-600">*</span></label>
										<div class="neu-inset-icon-input-container group">
											<x-svg.calender class="neu-inset-icon-input-icon group-hover:text-primary" />
											<input class="neu-inset-icon-input group-hover:placeholder:text-primary" id="cardExpiryLabel" type="number" placeholder="MM / YY" required>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- -------------------------- Paypal ------------------------- --}}
				<div x-show="tab === 'paypal'">
					<div class="border-1 bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-gray-100 bg-blue-600 p-6 shadow-neu-md-soft dark:shadow-neu-dark-md">
						<div class="border-b-1 text-primary mb-0 border-gray-100 p-6 px-6 py-3">
							<h3 class="h5 mb-0">Billing details</h3>
						</div>
						<div class="p-6">
							<div class="flex flex-wrap justify-center">
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputName2">Full Name *</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputName2" type="text" aria-describedby="cartInputName2" placeholder="e.g. Christopher Wood" required>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputEmail2">Email address *</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputEmail2" type="email" aria-describedby="cartInputName2" placeholder="example@company.com" required>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full text-center">
									<button class="whitespace-no-wrap btn-paypal inline-block select-none rounded border px-3 py-1 text-center align-middle font-normal leading-normal text-black no-underline" type="submit"><span class="fab fa-paypal mr-2"></span>Check out with Paypal</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- -------------------------- Bank/Wire Transfer ------------------------- --}}
				<div x-show="tab === 'bank'">
					<div class="border-1 bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-gray-100 p-6 shadow-neu-md-soft dark:shadow-neu-dark-md">
						<div class="border-b-1 text-primary mb-0 border-gray-100 p-6 px-6 py-3">
							<h3 class="h5 mb-0">Billing details</h3>
						</div>
						<div class="p-6">
							<div class="flex flex-wrap justify-center">
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputEmail3">Email address *</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputEmail3" type="email" aria-describedby="cartInputEmail3" placeholder="example@company.com" required>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!--Form-->
									<div class="mb-4">
										<label class="my-1 mr-2" for="cartFormCustomSelectPref3">Country</label>
										<select class="custom-select my-1 sm:mr-2" id="cartFormCustomSelectPref3">
											<option selected>Choose...</option>
											<option value="1">United States</option>
											<option value="2">Germany</option>
											<option value="3">Canada</option>
										</select>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputAdress3">Adress</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputAdress3" type="text" aria-describedby="cartInputAdress3" placeholder="e.g. Texas">
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputCity3">City</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputCity3" type="text" aria-describedby="cartInputCity3" placeholder="e.g. Dallas">
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputZip3">Zip/Postal code</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputZip3" type="number" aria-describedby="cartInputZip3" placeholder="e.g. 123456">
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputCompany3">Company Name *</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputCompany3" type="text" aria-describedby="cartInputCompany3" placeholder="e.g. Themesberg LLC" required>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputVAT3">VAT ID *</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputVAT3" type="number" aria-describedby="cartInputVAT3" placeholder="e.g. US12345" required>
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<!-- Form -->
									<div class="mb-4">
										<label for="cartInputPhone3">Phone Number</label>
										<input class="bg-primary text-secondary mb-1 block w-full appearance-none rounded-lg border border-light-secondary px-4 py-2 shadow-neu-inset-md dark:border-dark-secondary dark:shadow-neu-dark-inset-md" id="cartInputPhone3" type="number" aria-describedby="cartInputPhone3" placeholder="e.g. +(12)345 6789">
									</div>
									<!-- End of Form -->
								</div>
								<div class="w-full px-4 lg:w-4/5">
									<p class="mb-4 text-xs">For Bank/Wire transfer, product delivery takes place only after payment is received in full. Paying by credit card usually offers you immediate access to the products you ordered.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</x-app-layout>
