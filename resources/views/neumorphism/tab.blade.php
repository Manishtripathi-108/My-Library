@props(['type' => 0])

@switch($type)
	@case(1)
	@break

	@default
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
										<div class="neu-inset-icon-input-container group">
											<x-svg.card class="group-hover:text-primary neu-inset-icon-input-icon" />
											<input class="neu-inset-icon-input group-hover:placeholder:text-primary" id="card_number" type="number" placeholder="0000 0000 0000 0000" required>
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
										<div class="neu-inset-icon-input-container group">
											<x-svg.calender class="neu-inset-icon-input-icon group-hover:text-primary" />
											<input class="neu-inset-icon-input group-hover:placeholder:text-primary" id="card_expiry" type="number" placeholder="MM / YY" required>
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
@endswitch
