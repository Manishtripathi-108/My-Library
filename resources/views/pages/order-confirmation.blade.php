<x-app-layout title="Order Confirmation Page">
	<div class="bg-primary dark:bg-dark flex justify-center">
		<div class="bg-secondary rounded-lg px-8 md:my-5 md:w-11/12 md:px-14">

			{{-- Logo --}}
			<div class="py-6 md:pt-12">
				<div class="flex justify-center">
					<a class="cursor-pointer" href="{{ route('order-confirmation') }}">
						<x-logo class="h-20 w-20 md:h-24 md:w-24" />
					</a>
				</div>
			</div>

			{{-- Content --}}
			<div class="md:py-6">

				{{-- Order Confirmation --}}
				<div class="py-4">
					<h1 class="text-primary text-center font-playfair text-3xl font-bold">
						Order Confirmation
					</h1>
				</div>

				{{--  Order Confirmation Message --}}
				<div class="text-secondary *:pb-3 *:text-center *:font-karla py-4">
					<p>
						Hey Arthur Leywin,
					</p>
					<p>
						We've got your order! Your world is about to get attacked by a horde of goblins.
					</p>
					<p>
						We'll drop you some equipment to help you out. Keep an eye on sky for airdrops :)
					</p>
				</div>

				{{-- Order Number --}}
				<div class="pt-2 text-center">
					<h2 class="text-primary font-karla text-xl font-bold uppercase tracking-wider">
						Order No. abcd-0013
					</h2>
					<p class="text-secondary font-karla text-sm leading-5">
						24/06/2018
					</p>
				</div>

				<div class="md:grid md:grid-cols-3 md:gap-20">
					<!-- Order Details -->
					<div class="py-5 md:col-span-2">
						<h3 class="text-primary flex items-center justify-start border-b border-gray-300 py-3 font-karla font-bold uppercase tracking-wider dark:border-gray-700">
							ITEMS ORDERED
						</h3>

						<!-- Item -->
						<div class="flex items-center border-b border-gray-300 dark:border-gray-700">
							<div class="p-2">
								<img class="max-w-36 rounded" src="{{ asset('images/products/infinity-gauntlet.jpeg') }}" alt="Product Image">
							</div>
							<div class="flex flex-grow flex-col px-3">
								<a class="text-secondary break-words font-karla font-bold" href="#">
									Infinity Gauntlet
								</a>
								<span class="text-tertiary font-karla text-sm">
									Golden
								</span>
							</div>
							<p class="text-tertiary whitespace-nowrap font-karla tracking-wider">
								x1
							</p>
							<p class="text-tertiary whitespace-nowrap pl-4 font-karla tracking-wider">
								₹1000000000000.00
							</p>
						</div>
						<!-- End Item -->

						<!-- Item -->
						<div class="flex items-center border-b border-gray-300 dark:border-gray-700">
							<div class="p-2">
								<img class="max-w-36 rounded" src="{{ asset('images/products/dragon-armor.jpeg') }}" alt="Product Image">
							</div>
							<div class="flex flex-grow flex-col px-3">
								<a class="text-secondary break-words font-karla font-bold" href="#">
									Dark Dragon Armor
								</a>
								<span class="text-tertiary font-karla text-sm">
									Vanta Black
								</span>
							</div>
							<p class="text-tertiary whitespace-nowrap font-karla tracking-wider">
								x1
							</p>
							<p class="text-tertiary whitespace-nowrap pl-4 font-karla tracking-wider">
								&infin; &infin; &infin;
							</p>
						</div>
						<!-- End Item -->
					</div>

					<!-- Summary -->
					<div class="mt-8 grid w-full grid-cols-2 grid-rows-4 gap-y-3 md:mt-20 md:h-fit md:rounded md:border md:border-gray-300 md:p-5 md:dark:border-gray-700">
						<div class="text-secondary font-karla font-bold tracking-wider md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Discount</div>
						<div class="text-tertiary text-right font-karla md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">-₹18.00</div>
						<div class="text-secondary font-karla font-bold tracking-wider md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Subtotal</div>
						<div class="text-tertiary text-right font-karla md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">₹89.00</div>
						<div class="text-secondary font-karla font-bold tracking-wider md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Shipping</div>
						<div class="text-tertiary text-right font-karla md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">₹0.00</div>
						<div class="text-secondary font-karla font-bold tracking-wider">Total</div>
						<div class="text-tertiary text-right font-karla md:dark:border-gray-700">₹89.00</div>
					</div>
				</div>

				<!-- Payment Method -->
				<div class="mt-8">
					<h3 class="text-primary flex items-center justify-start border-b border-gray-300 py-3 font-karla font-bold uppercase tracking-wider dark:border-gray-700">
						Payment Info
					</h3>

					<div class="grid grid-cols-4 gap-4 p-2 md:grid-cols-8">
						<img class="h-6 md:h-8" src="https://orderlyemails.com/mobile-receipt-mastercard.png" alt="Mastercard Icon">
						<div class="col-span-2 flex flex-col justify-center md:col-span-6">
							<span class="text-secondary font-karla font-bold">
								Mastercard
								<span class="text-tertiary font-karla">(.... .... .... 1234)</span>
							</span>
							<span class="text-tertiary font-karla text-sm">
								Paid on 24/06/2018
							</span>
						</div>
						<div class="text-tertiary text-right font-karla">₹89.00</div>
					</div>
				</div>

				<!-- Addresses -->
				<div class="mt-8 grid grid-cols-2 gap-8">
					<div>
						<h3 class="text-nowrap text-primary flex items-center justify-start border-b border-gray-300 py-3 font-karla font-bold uppercase tracking-wider dark:border-gray-700">
							Shipping Address
						</h3>
						<div class="text-secondary font-karla">
							John Doe
							<br>
							1234 Main Street
							<br>
							Springfield, IL
							<br>
							62701
							<br>
							United States
							<br>
							Phone: 123-456-7890
						</div>
					</div>

					<div>
						<h3 class="text-primary flex items-center justify-end border-b border-gray-300 py-3 font-karla font-bold uppercase tracking-wider dark:border-gray-700">
							Billing Address
						</h3>
						<div class="text-secondary text-right font-karla">
							John Doe
							<br>
							1234 Main Street
							<br>
							Springfield, IL
							<br>
							62701
							<br>
							United States
							<br>
							Phone: 123-456-7890
						</div>
					</div>

					<a class="col-span-2 mt-3 font-karla tracking-wider text-yellow-600 dark:text-yellow-400" href="mailto:manishtripathi@gmail.com">
						manishtripathi@gmail.com
					</a>
				</div>

				<div class="text-secondary mt-12 pb-3 text-center font-karla">
					If you need help with anything please don't hesitate to drop us an email: manishtripathi@gmail.com :)
				</div>

				<!-- CTA -->
				<div class="mt-8 flex justify-center">
					<a class="bg-primary text-primary rounded-lg px-6 py-3 font-karla shadow" href="">
						Continue Shopping
					</a>
				</div>

			</div>
		</div>
	</div>
</x-app-layout>
