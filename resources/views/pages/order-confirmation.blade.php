<x-app-layout>
    <div class="flex justify-center bg-yellow-700 dark:bg-dark">
        <div class="rounded-lg bg-white px-8 dark:bg-gray-900 md:my-5 md:w-11/12 md:px-14">

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
                    <h1 class="playfair-display-font text-center text-3xl font-bold text-gray-700 dark:text-gray-200">
                        Order Confirmation
                    </h1>
                </div>

                {{--  Order Confirmation Message --}}
                <div class="py-4">
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        Hey Arthur Leywin,
                    </p>
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        We've got your order! Your world is about to get attacked by a horde of goblins.
                    </p>
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        We'll drop you some equipment to help you out. Keep an eye on sky for airdrops :)
                    </p>
                </div>

                {{-- Order Number --}}
                <div class="pt-2 text-center">
                    <h2 class="karla-font text-xl font-bold uppercase tracking-wider text-gray-700 dark:text-gray-200">
                        Order No. abcd-0013
                    </h2>
                    <p class="karla-font text-sm leading-5 text-gray-400 dark:text-gray-500">
                        24/06/2018
                    </p>
                </div>

                <div class="md:grid md:grid-cols-3 md:gap-20">
                    <!-- Order Details -->
                    <div class="py-5 md:col-span-2">
                        <h3 class="karla-font flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                            ITEMS ORDERED
                        </h3>

                        <!-- Item -->
                        <div class="flex items-center border-b border-gray-300 dark:border-gray-700">
                            <div class="p-2">
                                <img class="max-w-36 rounded" src="{{ asset('images/products/infinity-gauntlet.jpeg') }}" alt="Product Image">
                            </div>
                            <div class="flex flex-grow flex-col px-3">
                                <a class="karla-font break-words font-bold text-gray-600 dark:text-gray-300" href="#">
                                    Infinity Gauntlet
                                </a>
                                <span class="karla-font text-sm text-gray-400 dark:text-gray-500">
                                    Golden
                                </span>
                            </div>
                            <p class="karla-font whitespace-nowrap tracking-wider text-gray-600 dark:text-gray-300">
                                x1
                            </p>
                            <p class="karla-font whitespace-nowrap pl-4 tracking-wider text-gray-600 dark:text-gray-300">
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
                                <a class="karla-font break-words font-bold text-gray-600 dark:text-gray-300" href="#">
                                    Dark Dragon Armor
                                </a>
                                <span class="karla-font text-sm text-gray-400 dark:text-gray-500">
                                    Vanta Black
                                </span>
                            </div>
                            <p class="karla-font whitespace-nowrap tracking-wider text-gray-600 dark:text-gray-300">
                                x1
                            </p>
                            <p class="karla-font whitespace-nowrap pl-4 tracking-wider text-gray-600 dark:text-gray-300">
                                &infin; &infin; &infin;
                            </p>
                        </div>
                        <!-- End Item -->
                    </div>

                    <!-- Summary -->
                    <div class="mt-8 grid w-full grid-cols-2 grid-rows-4 gap-y-3 md:mt-20 md:h-fit md:rounded md:border md:border-gray-300 md:p-5 md:dark:border-gray-700">
                        <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Discount</div>
                        <div class="karla-font text-right text-gray-500 dark:text-gray-400 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">-₹18.00</div>
                        <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Subtotal</div>
                        <div class="karla-font text-right text-gray-500 dark:text-gray-400 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">₹89.00</div>
                        <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">Shipping</div>
                        <div class="karla-font text-right text-gray-500 dark:text-gray-400 md:border-b md:border-gray-300 md:py-3 md:dark:border-gray-700">₹0.00</div>
                        <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300">Total</div>
                        <div class="karla-font text-right text-gray-500 md:dark:border-gray-700">₹89.00</div>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="mt-8">
                    <h3 class="karla-font flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                        Payment Info
                    </h3>

                    <div class="grid grid-cols-4 gap-4 p-2 md:grid-cols-8">
                        <img class="h-6 md:h-8" src="https://orderlyemails.com/mobile-receipt-mastercard.png" alt="Mastercard Icon">
                        <div class="col-span-2 flex flex-col justify-center md:col-span-6">
                            <span class="karla-font font-bold text-gray-600 dark:text-gray-300">
                                Mastercard
                                <span class="karla-font text-gray-300 dark:text-gray-500">(.... .... .... 1234)</span>
                            </span>
                            <span class="karla-font text-sm text-gray-400 dark:text-gray-500">
                                Paid on 24/06/2018
                            </span>
                        </div>
                        <div class="karla-font text-right text-gray-500 dark:text-gray-400">₹89.00</div>
                    </div>
                </div>

                <!-- Addresses -->
                <div class="mt-8 grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="karla-font text-nowrap flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                            Shipping Address
                        </h3>
                        <div class="karla-font text-gray-600 dark:text-gray-300">
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
                        <h3 class="karla-font flex items-center justify-end border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                            Billing Address
                        </h3>
                        <div class="karla-font text-right text-gray-600 dark:text-gray-300">
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

                    <a class="karla-font col-span-2 mt-3 tracking-wider text-yellow-600 dark:text-yellow-400" href="mailto:manishtripathi@gmail.com">
                        manishtripathi@gmail.com
                    </a>
                </div>

                <div class="karla-font mt-12 pb-3 text-center text-gray-500 dark:text-gray-400">
                    If you need help with anything please don't hesitate to drop us an email: manishtripathi@gmail.com :)
                </div>

                <!-- CTA -->
                <div class="mt-8 flex justify-center">
                    <a class="karla-font rounded-lg bg-[#4b4b4b] px-6 py-3 text-white hover:bg-yellow-700 dark:bg-gray-700 dark:hover:bg-yellow-600" href="">
                        Continue Shopping
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
