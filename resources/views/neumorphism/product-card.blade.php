@props(['type' => 0])

@switch($type)
	@case(1)
		<div class="max-w-[350px] lg:w-full">
			<div class="overflow-hidden rounded-lg">
				<img class="h-auto w-full" src="{{ asset('images/products/watch.jpeg') }}" alt="" />

				<h3 class="mt-3 font-semibold">
					<a class="font-karla text-xl font-bold tracking-wide text-primary transition-colors duration-300 hover:text-accent" href="">
						Future Watch 1
					</a>
				</h3>

				<div class="flex items-center gap-10 py-3">
					<div class="rounded-lg px-3 py-2 text-center font-karla shadow-neu-inset-sm dark:text-dark-text-secondary dark:shadow-neu-dark-inset-sm">$879</div>
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

	@case(2)
		<div class="max-w-[350px] lg:w-full">
			<div class="relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="font-karla text-xl font-bold text-primary hover:text-accent " href="#">
						Future Watch
					</a>
					<h3 class="text-md mt-2 font-karla font-light text-secondary">
						Future Watch is a smartwatch that is from the future. It has all the features that you can imagine.
					</h3>

					<div class="mt-3 flex">
						<x-star rating='4.7' />
						<span class="neu-badge dark:neu-dark-badge ml-2 px-2 py-1 font-karla text-sm">
							4.7
						</span>
					</div>

					<div class="mt-3 flex items-center justify-between">
						<span class="font-karla text-lg text-primary">
							₹299.00
						</span>
						<a class="neu-icon-btn neu-btn dark:neu-dark-btn py-1 font-karla text-sm" href="#">
							<x-svg.add-to-cart class="h-5 w-5" />
							Add to cart
						</a>
					</div>
				</div>
			</div>
		</div>
	@break

	@case(3)
		<div class="max-w-[350px] md:max-w-fit lg:w-full">
			<div class="relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 p-6 shadow-neu">
				<div class="flex flex-col items-center md:flex-row">
					<a class="w-full md:w-1/4" href="#">
						<img class="w-full rounded-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
					</a>

					<div class="mt-4 w-full md:mt-0 md:w-1/2 md:px-4">
						<a class="title font-karla text-xl font-bold tracking-wider text-primary" href="#">
							Future Watch Series 0
						</a>

						<div class="my-3 flex items-center">
							<x-star rating="4.7" />
							<span class="neu-badge ml-2 px-2 py-1 font-karla text-sm">
								4.7
							</span>
							<span class="ml-3 flex items-center font-karla text-sm text-green-600">
								<x-svg.cart class="h-5 w-5" />
								150 orders
							</span>
						</div>

						<p class="font-karla text-primary">
							Future Watch Series 0 is a smartwatch that is from the future. It has all the features that you can imagine. It has a 4.7 rating and 150 orders.
						</p>
					</div>
					<div class="mt-4 flex w-full flex-col items-end md:mt-0 md:w-1/4">
						<div class="flex items-center text-primary">
							<span class="mr-2 font-karla text-red-600 line-through">₹299.00</span>
							<span class="font-karla">₹199.00</span>
						</div>

						<span class="mt-1 flex items-center font-karla text-sm text-green-700">
							<x-svg.truck class="mr-1 h-5 w-5" />
							Free shipping
						</span>

						<div class="mt-4 w-5/6">
							<a class="neu-btn mb-3 inline-flex w-full items-center justify-center text-sm" href="#">
								Details
							</a>
							<a class="neu-icon-btn w-full text-sm" href="#">
								<x-svg.add-to-cart class="h-5 w-5" />
								Wishlist
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	@break

	@default
		<div class="max-w-[350px] lg:w-full">
			<div class="relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border shadow-neu">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="font-karla text-xl font-bold tracking-wider text-primary" href="#">Future Watch</a>
					<div class="text-md mt-2 font-karla text-gray-600">₹299.00</div>
				</div>
			</div>
		</div>
@endswitch
