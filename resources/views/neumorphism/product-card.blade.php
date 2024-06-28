@props(['type' => 0])

@switch($type)
	@case(1)
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="card bg-primary shadow-soft border-light">
					<img src="{{ asset('images/products/drink.png') }}" alt="">
					<div class="card-footer border-top border-light p-4">
						<a class="h5" href="#">Strawberry sahke</a>
						<div class="mt-2">₹299.00</div>
					</div>
				</div>
			</div>
		</div>
	@break

	@case(2)
	@break

	@default
		<div class="max-w-[350px] lg:w-full px-2">
			<div class="bg-primary neu-shadow-soft relative flex min-w-0 flex-col break-words rounded-lg border border-gray-300 bg-clip-border">
				<img class="w-full rounded-t-lg" src="{{ asset('images/products/watch.jpeg') }}" alt="">
				<div class="border-t border-gray-300 p-4">
					<a class="karla-font text-xl font-bold tracking-wider text-gray-700" href="#">Future Watch</a>
					<div class="karla-font text-md mt-2 text-gray-600">₹299.00</div>
				</div>
			</div>
		</div>
@endswitch
