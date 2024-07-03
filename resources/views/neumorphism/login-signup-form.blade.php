@props(['type' => 0])

@switch($type)
	{{-- -------------------------------------------------------------------------- --}}
	{{--                                    login                                   --}}
	{{-- -------------------------------------------------------------------------- --}}
	@case('login')
	@break

	{{-- -------------------------------- login-1 -------------------------------- --}}
	@case('login-1')
	@break

	{{-- -------------------------------- login-2 -------------------------------- --}}
	@case('login-2')
	@break

	{{-- -------------------------------------------------------------------------- --}}
	{{--                                    signup                                  --}}
	{{-- -------------------------------------------------------------------------- --}}
	@case('signup')
		<div class="rounded-lg p-6 shadow-neu-outset">
			<div class="mb-4 font-playfair text-2xl font-semibold text-primary">Sign Up</div>

			<form action="#">
				<div class="group relative mb-4 flex items-center">
					<input class="peer w-full appearance-none rounded-xl border-none bg-primary py-4 pl-11 pr-5 shadow-neu-inset-sm outline-none placeholder:tracking-wide hover:shadow-neu focus:shadow-neu focus:placeholder:text-primary group-hover:placeholder:text-primary dark:bg-dark-primary dark:shadow-neu-dark-inset-sm dark:hover:shadow-neu-dark " type="text" placeholder="Username" required>
					<x-svg.user class="absolute left-3 h-6 w-6 text-secondary peer-focus:text-primary" />
				</div>

				<div class="group relative mb-4 flex items-center">
					<input class="peer w-full appearance-none rounded-xl border-none bg-primary py-4 pl-11 pr-5 shadow-neu-inset-sm outline-none placeholder:tracking-wide hover:shadow-neu focus:shadow-neu focus:placeholder:text-primary group-hover:placeholder:text-primary dark:bg-dark-primary dark:shadow-neu-dark-inset-sm dark:hover:shadow-neu-dark " type="email" placeholder="Email" required>
					<x-svg.mail class="absolute left-3 h-6 w-6 text-secondary peer-focus:text-primary" />
				</div>

				<div class="group relative mb-4 flex items-center">
					<input class="peer w-full appearance-none rounded-xl border-none bg-primary py-4 pl-11 pr-5 shadow-neu-inset-sm outline-none placeholder:tracking-wide hover:shadow-neu focus:shadow-neu focus:placeholder:text-primary group-hover:placeholder:text-primary dark:bg-dark-primary dark:shadow-neu-dark-inset-sm dark:hover:shadow-neu-dark " type="password" placeholder="Password" required>
					<x-svg.lock class="absolute left-3 h-6 w-6 text-secondary peer-focus:text-primary" />
				</div>

				<div class="flex items-center justify-end w-full">
					<button class="neu-btn dark:neu-dark-btn my-2 w-28 px-5 py-2 text-sm font-semibold tracking-wider text-primary shadow-neu-md active:shadow-neu-inset-sm dark:shadow-neu-dark-sm dark:hover:text-dark-text dark:active:shadow-neu-dark-inset-sm">Sign Up</button>
				</div>
				<h4 class="mt-4 font-karla text-lg tracking-wide text-gray-600">or Sign Up with social platforms</h4>
				<div class="mt-2 flex w-full items-center justify-evenly text-white">
					<span class="neu-btn shadow-neu-icon-outset rounded-full border-none dark:shadow-neu-dark-icon-outset bg-blue-400 p-3 hover:bg-[#ecf0f3] hover:text-blue-400 dark:hover:bg-dark-secondary">
						<x-svg.twitter class="h-6 w-6" />
					</span>
					<span class="neu-btn shadow-neu-icon-outset rounded-full border-none dark:shadow-neu-dark-icon-outset bg-blue-600 p-3 hover:bg-[#ecf0f3] hover:text-blue-600 dark:hover:bg-dark-secondary">
						<x-svg.facebook class="h-6 w-6" />
					</span>
					<span class="neu-btn shadow-neu-icon-outset rounded-full border-none dark:shadow-neu-dark-icon-outset bg-red-500 p-3 hover:bg-[#ecf0f3] hover:text-red-500 dark:hover:bg-dark-secondary">
						<x-svg.google class="h-6 w-6" />
					</span>
				</div>

				<div class="mt-2">
					<a class="font-karla text-lg tracking-wide text-gray-600">Already have an account?</a>
					<a class="font-karla text-lg tracking-wide text-blue-500" href="#">Sign In</a>
				</div>

			</form>
		</div>
	@break

	{{-- -------------------------------- signup-1 -------------------------------- --}}
	@case('signup-1')
	@break

	{{-- -------------------------------- signup-2 -------------------------------- --}}
	@case('signup-2')
	@break

	{{-- -------------------------------------------------------------------------- --}}
	{{--                               forgot-password                              --}}
	{{-- -------------------------------------------------------------------------- --}}
	@case('forgot-password')
	@break

	{{-- -------------------------------- forgot-password-1 -------------------------------- --}}
	@case('forgot-password-1')
	@break

	{{-- -------------------------------------------------------------------------- --}}
	{{--                                reset-password                              --}}
	{{-- -------------------------------------------------------------------------- --}}
	@case('reset-password')
	@break

	{{-- -------------------------------- reset-password-1 -------------------------------- --}}
	@case('reset-password-1')
	@break

	{{-- -------------------------------------------------------------------------- --}}
	{{--                                 log-sign                                   --}}
	{{-- -------------------------------------------------------------------------- --}}
	@case('log-sign')
	@break

	{{-- -------------------------------- log-sign-1 -------------------------------- --}}
	@case('log-sign-1')
	@break

	{{-- -------------------------------- default -------------------------------- --}}

	@default
@endswitch
