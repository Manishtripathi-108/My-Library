<x-app-layout title="Tabs">
	<x-grid title="Tabs">
		<x-slot name="description">
			Tabs are a design pattern for switching between different views or functional aspects of an application. They are used in web applications to organize content and functionality in a minimal and efficient way.
		</x-slot>

		<x-grid.item title="Default Tab">
			<div class="flex-center w-full flex-col" x-data="{ tab: 'credit' }">

				<!-- -------------------------- Tab-btn ------------------------- -->
				<nav class="w-full">
					<div class="flex flex-col flex-wrap gap-5 sm:flex-row">
						<button class="neu-btn cursor-pointer" type="button" :class="{ 'active': tab === 'credit' }" @click="tab = 'credit'">
							Credit Card
						</button>
						<button class="neu-btn cursor-pointer" type="button" :class="{ 'active': tab === 'paypal' }" @click="tab = 'paypal'">
							Paypal
						</button>
						<button class="neu-btn cursor-pointer" type="button" :class="{ 'active': tab === 'bank' }" @click="tab = 'bank'">
							Bank/Wire Transfer
						</button>
					</div>
				</nav>

				<!-- -------------------------- Tab-content ------------------------- -->
				<div class="mt-4 max-w-[700px] lg:mt-6">

					<!-- -------------------------- Credit Card ------------------------- -->
					<div x-show="tab === 'credit'" x-transition>
						<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-4 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

							<!-- -------------------------- Card Heading ------------------------- -->
							<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
								<h3 class="text-lg">Card details</h3>
							</div>

							<!-- -------------------------- Card Details ------------------------- -->
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
											<div class="neu-input-group neu-input-group-prepend">
												<x-svg.card class="neu-input-icon" />
												<input class="neu-form-input" id="card_number" type="number" placeholder="0000 0000 0000 0000" required>
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
											<div class="neu-input-group neu-input-group-prepend group">
												<x-svg.calendar class="neu-input-icon" />
												<input class="neu-form-input" id="card_expiry" type="number" placeholder="MM / YY" required>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- -------------------------- Paypal ------------------------- -->
					<div x-show="tab === 'paypal'" x-transition>
						<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-6 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

							<!-- -------------------------- Card Heading ------------------------- -->
							<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
								<h3 class="text-lg">Paypal</h3>
							</div>

							<!-- -------------------------- Card Details ------------------------- -->
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

					<!-- -------------------------- Bank/Wire Transfer ------------------------- -->
					<div x-show="tab === 'bank'" x-transition>
						<div class="bg-primary mb-4 flex min-w-0 flex-col break-words rounded border border-light-secondary p-6 shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md">

							<!-- -------------------------- Card Heading ------------------------- -->
							<div class="text-primary border-b border-light-secondary p-4 dark:border-dark-secondary">
								<h3 class="text-lg">Bank/Wire Transfer</h3>
							</div>

							<!-- -------------------------- Card Details ------------------------- -->
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
		</x-grid.item>

		<x-grid.item title="Tab With Icons">
			<div class="flex-center w-full flex-col" x-data="{ tab: 'tab1' }">

				<!-- -------------------------- Tab-btn ------------------------- -->
				<nav class="w-full">
					<div class="flex flex-col flex-wrap gap-5 sm:flex-row">
						<button class="neu-btn neu-icon-btn cursor-pointer" type="button" :class="{ 'active': tab === 'tab1' }" @click="tab = 'tab1'">
							<x-svg.naruto class="size-7" />
							Naruto
						</button>
						<button class="neu-btn neu-icon-btn cursor-pointer" type="button" :class="{ 'active': tab === 'tab2' }" @click="tab = 'tab2'">
							<x-svg.deku class="size-7" />
							My Hero Academia
						</button>
						<button class="neu-btn neu-icon-btn cursor-pointer" type="button" :class="{ 'active': tab === 'tab3' }" @click="tab = 'tab3'">
							<x-svg.gojo class="size-7" />
							Jujutsu Kaisen
						</button>
					</div>
				</nav>

				<!-- -------------------------- Tab-content ------------------------- -->
				<div class="mt-4 max-w-[700px] shadow-neu-inset-md dark:shadow-neu-dark-inset-md lg:mt-6">

					<!-- -------------------------- Tab 1 ------------------------- -->
					<div x-show="tab === 'tab1'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Naruto</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Naruto Uzumaki is a young ninja with a dream to become the strongest ninja and the leader of his village, the Hokage. Along his journey, he faces numerous challenges, makes new friends, and fights powerful enemies.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 2 ------------------------- -->
					<div x-show="tab === 'tab2'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">My Hero Academia</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>My Hero Academia follows Izuku Midoriya, a young boy born without superpowers in a world where they are common. Despite this, he dreams of becoming a hero and is scouted by All Might, the greatest hero of all time.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 3 ------------------------- -->
					<div x-show="tab === 'tab3'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Jujutsu Kaisen</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Jujutsu Kaisen follows Yuji Itadori, a high school student who joins a secret organization of sorcerers to kill a powerful Curse named Ryomen Sukuna. However, after swallowing a cursed object, he becomes the host of Sukuna.</p>
						</div>
					</div>

				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Icons only Tab">
			<div class="flex-center w-full flex-col" x-data="{ tab: 'tab1' }">

				<!-- -------------------------- Tab-btn ------------------------- -->
				<nav class="w-full">
					<div class="flex-center flex-wrap gap-5 sm:flex-row">
						<button class="neu-btn neu-icon-only-btn w-fit cursor-pointer p-4" type="button" :class="{ 'active': tab === 'tab1' }" @click="tab = 'tab1'">
							<x-svg.naruto class="size-12" />
						</button>
						<button class="neu-btn neu-icon-only-btn w-fit cursor-pointer p-4" type="button" :class="{ 'active': tab === 'tab2' }" @click="tab = 'tab2'">
							<x-svg.deku class="size-12" />
						</button>
						<button class="neu-btn neu-icon-only-btn w-fit cursor-pointer p-4" type="button" :class="{ 'active': tab === 'tab3' }" @click="tab = 'tab3'">
							<x-svg.gojo class="size-12" />
						</button>
					</div>
				</nav>

				<!-- -------------------------- Tab-content ------------------------- -->
				<div class="mt-4 max-w-[700px] shadow-neu-inset-md dark:shadow-neu-dark-inset-md lg:mt-6">

					<!-- -------------------------- Tab 1 ------------------------- -->
					<div x-show="tab === 'tab1'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Naruto</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Naruto Uzumaki is a young ninja with a dream to become the strongest ninja and the leader of his village, the Hokage. Along his journey, he faces numerous challenges, makes new friends, and fights powerful enemies.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 2 ------------------------- -->
					<div x-show="tab === 'tab2'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">My Hero Academia</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>My Hero Academia follows Izuku Midoriya, a young boy born without superpowers in a world where they are common. Despite this, he dreams of becoming a hero and is scouted by All Might, the greatest hero of all time.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 3 ------------------------- -->
					<div x-show="tab === 'tab3'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Jujutsu Kaisen</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Jujutsu Kaisen follows Yuji Itadori, a high school student who joins a secret organization of sorcerers to kill a powerful Curse named Ryomen Sukuna. However, after swallowing a cursed object, he becomes the host of Sukuna.</p>
						</div>
					</div>

				</div>
			</div>
		</x-grid.item>

		<x-grid.item title="Vertical Tab">
			<div class="flex-center w-full flex-col gap-4 sm:flex-row lg:gap-6" x-data="{ tab: 'tab1' }">

				<!-- -------------------------- Tab-btn ------------------------- -->
				<nav class="w-full">
					<div class="flex flex-col flex-wrap gap-5">
						<button class="neu-btn neu-icon-btn w-full cursor-pointer" type="button" :class="{ 'active': tab === 'tab1' }" @click="tab = 'tab1'">
							<x-svg.naruto class="size-7" />
							Naruto
						</button>
						<button class="neu-btn neu-icon-btn w-full cursor-pointer" type="button" :class="{ 'active': tab === 'tab2' }" @click="tab = 'tab2'">
							<x-svg.deku class="size-7" />
							My Hero Academia
						</button>
						<button class="neu-btn neu-icon-btn w-full cursor-pointer" type="button" :class="{ 'active': tab === 'tab3' }" @click="tab = 'tab3'">
							<x-svg.gojo class="size-7" />
							Jujutsu Kaisen
						</button>
					</div>
				</nav>

				<!-- -------------------------- Tab-content ------------------------- -->
				<div class="max-w-[700px] shadow-neu-inset-md dark:shadow-neu-dark-inset-md">

					<!-- -------------------------- Tab 1 ------------------------- -->
					<div x-show="tab === 'tab1'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Naruto</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Naruto Uzumaki is a young ninja with a dream to become the strongest ninja and the leader of his village, the Hokage. Along his journey, he faces numerous challenges, makes new friends, and fights powerful enemies.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 2 ------------------------- -->
					<div x-show="tab === 'tab2'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">My Hero Academia</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>My Hero Academia follows Izuku Midoriya, a young boy born without superpowers in a world where they are common. Despite this, he dreams of becoming a hero and is scouted by All Might, the greatest hero of all time.</p>
						</div>
					</div>

					<!-- -------------------------- Tab 3 ------------------------- -->
					<div x-show="tab === 'tab3'">
						<!-- -------------------------- Heading ------------------------- -->
						<div class="text-primary border-b border-light-secondary px-6 py-4 dark:border-dark-secondary">
							<h3 class="text-lg">Jujutsu Kaisen</h3>
						</div>

						<!-- -------------------------- Details ------------------------- -->
						<div class="text-secondary p-6">
							<p>Jujutsu Kaisen follows Yuji Itadori, a high school student who joins a secret organization of sorcerers to kill a powerful Curse named Ryomen Sukuna. However, after swallowing a cursed object, he becomes the host of Sukuna.</p>
						</div>
					</div>

				</div>
			</div>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Default Tab</x-sidenav-list>
		<x-sidenav-list>Tab With Icons</x-sidenav-list>
		<x-sidenav-list>Icons only Tab</x-sidenav-list>
		<x-sidenav-list>Vertical Tab</x-sidenav-list>
	</x-slot>

</x-app-layout>
