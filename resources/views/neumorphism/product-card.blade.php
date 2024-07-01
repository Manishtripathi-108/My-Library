@props(['type' => 0])

@switch($type)
	@case(1)
		<div class="max-w-[350px] lg:w-full">
			<div class="overflow-hidden rounded-lg">
				<img class="h-auto w-full" src="{{ asset('images/products/watch.jpeg') }}" alt="" />

				<h3 class="mt-3 font-semibold">
					<a class="font-karla text-xl font-bold tracking-wide text-[#1979ef] transition-colors duration-300 hover:text-gray-600" href="">
						Product Title
					</a>
				</h3>

				<div class="flex gap-10 items-center py-3 text-light-text">
					<div class="shadow-neu-inset-sm font-karla rounded-lg px-3 py-2 text-center">$879</div>
					<a class="neu-btn neu-icon-only-btn p-3 transition-colors duration-300 hover:text-[#1979ef]" href="">
						<x-svg.cart class="h-6 w-6" />
					</a>
					<a class="neu-btn neu-icon-only-btn p-3 transition-colors duration-300 hover:text-pink-500" href="">
						<x-svg.heart class="h-6 w-6" />
					</a>
				</div>
			</div>
		</div>
	@break

	@case(2)
		<div class="max-w-[350px] lg:w-full">
			<div class="bg-primary shadow-neu relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="font-karla text-xl font-bold text-light-text" href="#">
						Future Watch
					</a>
					<h3 class="font-karla text-md mt-2 font-light text-gray-600">
						Future Watch is a smartwatch that is from the future. It has all the features that you can imagine.
					</h3>

					<div class="mt-3 flex">
						<x-star rating='4.7' />
						<span class="neu-badge font-karla ml-2 py-1 px-2 text-sm">
							4.7
						</span>
					</div>

					<div class="mt-3 flex items-center justify-between">
						<span class="font-karla text-lg text-light-text">
							₹299.00
						</span>
						<a class="neu-icon-btn font-karla py-1 text-sm" href="#">
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
			<div class="bg-primary shadow-neu relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 p-6">
				<div class="flex flex-col items-center md:flex-row">
					<a class="w-full md:w-1/4" href="#">
						<img class="w-full rounded-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
					</a>

					<div class="mt-4 w-full md:mt-0 md:w-1/2 md:px-4">
						<a class="font-karla title text-xl font-bold tracking-wider text-light-text" href="#">
							Future Watch Series 0
						</a>

						<div class="my-3 flex items-center">
							<x-star rating="4.7" />
							<span class="neu-badge font-karla ml-2 py-1 px-2 text-sm">
								4.7
							</span>
							<span class="font-karla ml-3 flex items-center text-sm text-green-600">
								<x-svg.cart class="h-5 w-5" />
								150 orders
							</span>
						</div>

						<p class="font-karla text-light-text">
							Future Watch Series 0 is a smartwatch that is from the future. It has all the features that you can imagine. It has a 4.7 rating and 150 orders.
						</p>
					</div>
					<div class="mt-4 flex w-full flex-col items-end md:mt-0 md:w-1/4">
						<div class="flex items-center text-light-text">
							<span class="font-karla mr-2 text-red-600 line-through">₹299.00</span>
							<span class="font-karla">₹199.00</span>
						</div>

						<span class="font-karla mt-1 flex items-center text-sm text-green-700">
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
			<div class="bg-primary shadow-neu relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="font-karla text-xl font-bold tracking-wider text-light-text" href="#">Future Watch</a>
					<div class="font-karla text-md mt-2 text-gray-600">₹299.00</div>
				</div>
			</div>
		</div>
@endswitch
