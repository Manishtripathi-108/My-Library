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
