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
		<div class="neu-shadow-outset p-6">
			<div class="playfair-display-font mb-4 text-2xl font-semibold text-gray-800">Sign Up</div>

			<form action="#">
				<div class="group relative mb-4 flex items-center text-gray-500 hover:text-gray-800">
					<input class="neu-shadow-inset-soft bg-primary peer w-full appearance-none rounded-xl py-4 pl-11 pr-5 outline-none placeholder:tracking-wide group-hover:placeholder:text-gray-800 group-focus:placeholder:text-gray-800" type="username" placeholder="Username" required>
					<x-svg.user class="absolute left-3 h-6 w-6 text-current peer-focus:text-gray-800" />
				</div>

				<div class="group relative mb-4 flex items-center text-gray-500 hover:text-gray-800">
					<input class="neu-shadow-inset-soft bg-primary peer w-full appearance-none rounded-xl py-4 pl-11 pr-5 outline-none placeholder:tracking-wide group-hover:placeholder:text-gray-800 group-focus:placeholder:text-gray-800" type="email" placeholder="Email" required>
					<x-svg.mail class="absolute left-3 h-6 w-6 text-current peer-focus:text-gray-800" />
				</div>

				<div class="group relative mb-4 flex items-center text-gray-500 hover:text-gray-800">
					<input class="neu-shadow-inset-soft bg-primary peer w-full appearance-none rounded-xl py-4 pl-11 pr-5 outline-none placeholder:tracking-wide group-hover:placeholder:text-gray-800 group-focus:placeholder:text-gray-800" type="password" placeholder="Password" required>
					<x-svg.lock class="absolute left-3 h-6 w-6 text-current peer-focus:text-gray-800" />
				</div>

				<button class="neu-btn my-2 w-full border-none px-5 py-2 text-sm font-semibold tracking-wider text-gray-800">Sign Up</button>

				<h4 class="karla-font mt-4 text-lg tracking-wide text-gray-600">or Sign Up with social platforms</h4>
				<div class="mt-2 flex w-full items-center justify-evenly text-white">
					<span class="neu-btn neu-icon-only-btn-outset bg-blue-400 p-3 hover:bg-[#ecf0f3] hover:text-blue-400">
						<x-svg.twitter class="h-6 w-6" />
					</span>
					<span class="neu-btn neu-icon-only-btn-outset bg-blue-600 p-3 hover:bg-[#ecf0f3] hover:text-blue-600">
						<x-svg.facebook class="h-6 w-6" />
					</span>
					<span class="neu-btn neu-icon-only-btn-outset bg-red-500 p-3 hover:bg-[#ecf0f3] hover:text-red-500">
						<x-svg.google class="h-6 w-6" />
					</span>
				</div>

				<div class="mt-2">
					<a class="karla-font text-lg tracking-wide text-gray-600">Already have an account?</a>
					<a class="karla-font text-lg tracking-wide text-blue-500" href="#">Sign In</a>
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
