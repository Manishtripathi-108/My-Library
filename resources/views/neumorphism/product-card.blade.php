@props(['type' => 0])

@switch($type)
	@case(1)
		<div class="max-w-[350px] px-2 lg:w-full">
			<div class="bg-primary neu-shadow-soft relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="karla-font text-xl font-bold text-gray-700" href="#">
						Future Watch
					</a>
					<h3 class="karla-font text-md mt-2 font-light text-gray-600">
						Future Watch is a smartwatch that is from the future. It has all the features that you can imagine.
					</h3>

					<div class="mt-3 flex">
						<x-star rating='4.7' />
						<span class="neu-badge karla-font ml-2 px-2 py-1 text-sm">
							4.7
						</span>
					</div>

					<div class="mt-3 flex items-center justify-between">
						<span class="karla-font text-lg text-gray-700">
							₹299.00
						</span>
						<a class="neu-icon-btn karla-font px-2 py-1 text-sm" href="#">
							<x-svg.add-to-cart class="h-5 w-5" />
							Add to cart
						</a>
					</div>
				</div>
			</div>
		</div>
	@break

	@case(2)
		<div class="md:max-w-fit max-w-[350px] lg:w-full">
			<div class="bg-primary neu-shadow-soft relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 p-6">
				<div class="flex flex-col items-center md:flex-row">
					<div class="w-full md:w-1/4">
						<a href="#">
							<img class="w-full rounded-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
						</a>
					</div>
					<div class="mt-4 w-full md:mt-0 md:w-1/2 md:px-4">
						<div>
							<a class="karla-font title text-xl font-bold tracking-wider text-gray-700" href="#">
								Future Watch Series 0
							</a>
							<div class="my-3 flex items-center">
								<x-star rating="4.7" />
								<span class="neu-badge karla-font ml-2 px-2 py-1 text-sm">
									4.7
								</span>
								<span class="karla-font ml-3 flex items-center text-sm text-green-600">
									<span class="fas fa-shopping-cart mr-1"></span>
									<x-svg.cart	 class="h-5 w-5" />
									150 orders
								</span>
							</div>
							<p class="karla-font text-gray-700">
								Future Watch Series 0 is a smartwatch that is from the future. It has all the features that you can imagine. It has a 4.7 rating and 150 orders.
							</p>
						</div>
					</div>
					<div class="mt-4 flex w-full flex-col items-end md:mt-0 md:w-1/4">
						<div class="flex items-center text-gray-700">
							<span class="karla-font mr-2 text-red-600 line-through">₹299.00</span>
							<span class="karla-font">₹199.00</span>
						</div>
						<span class="karla-font mt-1 flex items-center text-sm text-green-700">
							<x-svg.truck class="h-5 w-5" />
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
		<div class="max-w-[350px] px-2 lg:w-full">
			<div class="bg-primary neu-shadow-soft relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="karla-font text-xl font-bold tracking-wider text-gray-700" href="#">Future Watch</a>
					<div class="karla-font text-md mt-2 text-gray-600">₹299.00</div>
				</div>
			</div>
		</div>
@endswitch
