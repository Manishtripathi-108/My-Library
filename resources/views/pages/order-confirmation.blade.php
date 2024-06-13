<x-app-layout>
    <div class="flex justify-center bg-yellow-700 dark:bg-gray-800">
        <div class="w-2/5 rounded-lg bg-white dark:bg-gray-900">

            {{-- Logo --}}
            <div class="py-6">
                <div class="flex justify-center">
                    <a class="cursor-pointer" href="{{ route('order-confirmation') }}">
                        <x-logo class="h-24 w-24" />
                    </a>
                </div>
            </div>

            {{-- Content --}}
            <div class="px-14 py-6">

                {{-- Order Confirmation --}}
                <div class="py-4">
                    <h1 class="playfair-display-font text-center text-3xl font-bold text-[#4B4B4B] dark:text-gray-200">
                        Order Confirmation
                    </h1>
                </div>

                <div class="py-4">
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        Hey Smiles abcd,
                    </p>
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        We've got your order! Your world is about to look a whole lot better.
                    </p>
                    <p class="karla-font pb-3 text-center text-gray-500 dark:text-gray-400">
                        We'll drop you another email when your order ships.
                    </p>
                </div>

                <div class="pt-2 text-center">
                    <h2 class="karla-font text-xl font-bold uppercase tracking-wider text-[#4b4b4b] dark:text-gray-200">
                        Order No. abcd-0013
                    </h2>
                    <p class="karla-font text-sm leading-5 text-gray-400 dark:text-gray-500">
                        24/06/2018
                    </p>
                </div>

                <!-- Order Details -->
                <div class="py-5">
                    <h3 class="karla-font flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                        ITEMS ORDERED
                    </h3>

                    <!-- Item -->
                    <div class="flex items-center border-b border-gray-300 dark:border-gray-700">
                        <div class="p-2">
                            <img class="max-w-36 rounded" src="https://cdn.shopify.com/s/files/1/1070/9630/products/Case-2_140x140_cropped@2x.jpg?v=1527243096" alt="Product Image">
                        </div>
                        <div class="flex flex-grow flex-col px-3">
                            <a class="karla-font break-words font-bold text-gray-600 dark:text-gray-300" href="#">
                                Product Name
                            </a>
                            <span class="karla-font text-sm text-gray-400 dark:text-gray-500">
                                Black
                            </span>
                        </div>
                        <p class="karla-font whitespace-nowrap tracking-wider text-gray-600 dark:text-gray-300">
                            x1
                        </p>
                        <p class="karla-font whitespace-nowrap pl-4 tracking-wider text-gray-600 dark:text-gray-300">
                            ₹100
                        </p>
                    </div>
                    <!-- End Item -->

                    <!-- Item -->
                    <div class="flex items-center border-b border-gray-300 dark:border-gray-700">
                        <div class="p-2">
                            <img class="max-w-36 rounded" src="https://cdn.shopify.com/s/files/1/1070/9630/products/Classic-Black-1_140x140_cropped@2x.jpg?v=1527156339" alt="Product Image">
                        </div>
                        <div class="flex flex-grow flex-col px-3">
                            <a class="karla-font break-words font-bold text-gray-600 dark:text-gray-300" href="#">
                                Product Name
                            </a>
                            <span class="karla-font text-sm text-gray-400 dark:text-gray-500">
                                Black
                            </span>
                        </div>
                        <p class="karla-font whitespace-nowrap tracking-wider text-gray-600 dark:text-gray-300">
                            x1
                        </p>
                        <p class="karla-font whitespace-nowrap pl-4 tracking-wider text-gray-600 dark:text-gray-300">
                            ₹100
                        </p>
                    </div>
                    <!-- End Item -->

                </div>

                <!-- Summary -->
                <div class="mt-8 grid w-full grid-cols-2 grid-rows-4 gap-y-3">
                    <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300">Discount</div>
                    <div class="karla-font text-right text-gray-500 dark:text-gray-400">-₹18.00</div>
                    <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300">Subtotal</div>
                    <div class="karla-font text-right text-gray-500 dark:text-gray-400">₹89.00</div>
                    <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300">Shipping</div>
                    <div class="karla-font text-right text-gray-500 dark:text-gray-400">₹0.00</div>
                    <div class="karla-font font-bold tracking-wider text-gray-600 dark:text-gray-300">Total</div>
                    <div class="karla-font text-right text-gray-500 dark:text-gray-400">₹89.00</div>
                </div>

                <!-- Payment Method -->
                <div class="mt-8">
                    <h3 class="karla-font flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
                        Payment Info
                    </h3>

                    <div class="grid grid-cols-8 gap-4 p-2">
                        <img class="h-8" src="https://orderlyemails.com/mobile-receipt-mastercard.png" alt="Mastercard Icon">
                        <div class="col-span-6 flex flex-col justify-center">
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
                        <h3 class="karla-font flex items-center justify-start border-b border-gray-300 py-3 font-bold uppercase tracking-wider text-gray-400 dark:border-gray-700 dark:text-gray-500">
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

                    <a class="karla-font mt-3 tracking-wider text-yellow-600 dark:text-yellow-400" href="mailto:manishtripathi@gmail.com">
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
