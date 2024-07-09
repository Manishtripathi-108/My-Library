@props(['type' => 0])

@switch($type)
	{{-- Product without shadow --}}
	@case(1)
		<div class="max-w-[350px] lg:w-full">
			<div class="overflow-hidden rounded-lg">
				<img class="h-auto w-full rounded-lg border border-gray-300 dark:border-gray-500" src="{{ asset('images/products/watch.jpeg') }}" alt="" />

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
	@break

	{{-- Product with Rating --}}
	@case(2)
		<div class="max-w-[350px] lg:w-full">
			<div class="flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu-lg dark:border-gray-500 dark:shadow-neu-dark-md">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4 dark:border-gray-500">
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
	@break

	{{-- featured product item --}}
	@case(3)
		<div class="max-w-[350px] md:max-w-fit lg:w-full">
			<div class="flex flex-col break-words rounded-lg border border-gray-300 p-6 shadow-neu-lg dark:border-gray-500 dark:shadow-neu-dark-md">
				<div class="flex flex-col items-center md:flex-row">
					<a class="w-full md:w-1/4" href="#">
						<img class="w-full rounded-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
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
	@break

	{{-- Checkout card --}}
	@case(4)
		<div class="max-w-[350px] md:max-w-fit lg:w-full">
			<div class="flex items-center gap-4 rounded-lg border border-gray-300 p-6 shadow-neu-lg dark:border-gray-500 dark:shadow-neu-dark-md">

				<a class="w-2/3 md:w-1/3" href="#">
					<img class="w-full rounded-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
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
	@break

	

	{{-- Simple Product card --}}
	@default
		<div class="max-w-[350px] lg:w-full">
			<div class="flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu-lg dark:border-gray-500 dark:shadow-neu-dark-md">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4 dark:border-gray-500">
					<a class="text-primary hover:text-accent font-karla text-xl font-bold tracking-wider" href="#">Future Watch</a>
					<div class="text-md mt-2 font-karla text-gray-600">₹7999.00</div>
				</div>
			</div>
		</div>
@endswitch
