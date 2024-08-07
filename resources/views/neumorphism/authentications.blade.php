<x-app-layout title="Authentication | Neumorphism">
	<x-grid title="Authentications">
		<x-slot name="description">
			Authentication is the process of verifying the identity of a user or process. It ensures that the user is who they claim to be.
		</x-slot>

		<x-grid.item title="Sign Up">
			<div class="rounded-lg p-6 shadow-neu-outset-lg dark:shadow-neu-dark-outset-lg">
				<div class="text-primary mb-4 font-playfair text-2xl font-semibold">Sign Up</div>

				<form action="#">
					<div class="group relative mb-4 flex items-center">
						<input class="neu-inset-outset-input text-primary group-hover:placeholder:text-primary peer w-full py-4 pl-11 pr-5" type="text" placeholder="Username" required>
						<x-svg.user class="text-secondary peer-focus:text-primary absolute left-3 h-6 w-6" />
					</div>

					<div class="group relative mb-4 flex items-center">
						<input class="neu-inset-outset-input text-primary group-hover:placeholder:text-primary peer w-full py-4 pl-11 pr-5" type="email" placeholder="Email" required>
						<x-svg.mail class="text-secondary peer-focus:text-primary absolute left-3 h-6 w-6" />
					</div>

					<div class="group relative mb-4 flex items-center">
						<input class="neu-inset-outset-input text-primary group-hover:placeholder:text-primary peer w-full py-4 pl-11 pr-5" type="password" placeholder="Password" required>
						<x-svg.lock class="text-secondary peer-focus:text-primary absolute left-3 h-6 w-6" />
					</div>

					<div class="flex w-full items-center justify-end">
						<button class="neu-btn text-primary my-2 w-28 px-5 text-sm font-semibold">Sign Up</button>
					</div>
					<h4 class="mt-4 font-karla text-lg tracking-wide text-gray-600">or Sign Up with social platforms</h4>
					<div class="mt-2 flex w-full items-center justify-evenly text-white">
						<button class="neu-btn hover:bg-primary active:bg-primary rounded-full border-none bg-blue-400 p-3 text-white shadow-neu-outset-sm outline-none hover:text-blue-400 dark:text-white dark:shadow-neu-dark-outset-sm">
							<x-svg.twitter class="h-6 w-6" />
						</button>
						<button class="neu-btn hover:bg-primary active:bg-primary rounded-full border-none bg-blue-600 p-3 text-white shadow-neu-outset-sm outline-none hover:text-blue-600 dark:text-white dark:shadow-neu-dark-outset-sm">
							<x-svg.facebook class="h-6 w-6" />
						</button>
						<button class="neu-btn hover:bg-primary active:bg-primary rounded-full border-none bg-red-500 p-3 text-white shadow-neu-outset-sm outline-none hover:text-red-500 dark:text-white dark:shadow-neu-dark-outset-sm">
							<x-svg.google class="h-6 w-6" />
						</button>
					</div>

					<div class="mt-2">
						<a class="font-karla text-lg tracking-wide text-gray-600">Already have an account?</a>
						<a class="font-karla text-lg tracking-wide text-blue-500" href="#">Sign In</a>
					</div>

				</form>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
