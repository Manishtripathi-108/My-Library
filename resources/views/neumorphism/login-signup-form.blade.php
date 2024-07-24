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
		<div class="bg-primary relative h-[600px] w-full overflow-hidden rounded-xl p-6 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="formSwitch()">
			<!-- Form Container A: Create Account -->
			<!-- all occurrences 600px here needs to be changed to same as width of the above div for now it is w-full -->
			<div class="bg-primary absolute left-[calc(100%-600px)] top-0 z-[100] flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="registerContainer">
				<form class="flex h-full w-full flex-col items-center justify-center" method="" action="">
					<h2 class="form_title text-primary mb-8 text-3xl font-bold">Create Account</h2>
					<div class="flex-center text-primary">
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
					</div>
					<span class="text-secondary mb-3 mt-8">or use email for registration</span>

					@php
						$class = 'bg-primary my-1 w-3/5 rounded-lg border-none py-3 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs dark:shadow-neu-dark-inset-xs';
						$types = ['text', 'email', 'password'];
						$placeholder = ['Name', 'Email', 'Password'];
					@endphp

					@foreach ($types as $type)
						<input class="{{ $class }}" type="{{ $type }}" placeholder="{{ $placeholder[$loop->index] }}">
					@endforeach

					<button class="neu-btn mt-12" @click.prevent="preventDefault">SIGN UP</button>
				</form>
			</div>

			<!-- Form Container B: Sign In -->
			<div class="bg-primary absolute left-[calc(100%-600px)] top-0 z-0 flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="loginContainer">
				<form class="flex h-full w-full flex-col items-center justify-center" method="" action="">
					<h2 class="form_title text-primary mb-8 text-3xl font-bold">Sign in to Website</h2>
					<div class="flex-center text-primary">
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
					</div>
					<span class="text-secondary mb-3 mt-8">or use your email account</span>

					@for ($i = 1; $i < 3; $i++)
						<input class="{{ $class }}" type="{{ $types[$i] }}" placeholder="{{ $placeholder[$i] }}">
					@endfor

					<a class="text-primary mb-8 mt-6 border-b border-solid border-b-[#a0a5a8] text-[15px]">Forgot your password?</a>
					<button class="neu-btn mt-12" @click.prevent="preventDefault">SIGN IN</button>
				</form>
			</div>

			<!-- Switch Container -->
			<div class="bg-primary absolute left-0 top-0 z-[200] flex h-full w-2/5 items-center justify-center overflow-hidden p-[50px] shadow-neu-md-soft transition-all duration-[1.25s] dark:shadow-neu-dark-md" x-ref="switchContainer">
				<!-- Background Circles for Animation -->
				<div class="switch-circles bg-primary size-[500px] absolute bottom-[-60%] left-[-60%] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s] dark:shadow-neu-dark-inset-sm"></div>
				<div class="switch-circles bg-primary size-[350px] absolute bottom-[-60%] left-[-60%] top-[-30%] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s] dark:shadow-neu-dark-inset-sm"></div>

				<!-- Switch Content 1: Sign In -->
				<div class="px-13 absolute flex w-full flex-col items-center justify-center py-12 transition-all duration-[1.25s]" x-ref="SwitchSignIN">
					<h2 class="text-primary mb-8 text-3xl font-bold">Welcome Back !</h2>
					<p class="text-secondary px-2 text-center text-sm leading-relaxed tracking-wide">
						<x-joke />
					</p>
					<button class="neu-btn mt-12" @click="changeForm">SIGN IN</button>
				</div>

				<!-- Switch Content 2: Sign Up -->
				<div class="px-13 invisible absolute flex w-full flex-col items-center justify-center py-12 opacity-0 transition-all duration-[1.25s]" x-ref="switchSignUp">
					<h2 class="text-primary mb-8 text-3xl font-bold">Hello Friend !</h2>
					<p class="text-secondary px-2 text-center text-sm leading-relaxed tracking-wide">
						<x-joke />
					</p>
					<button class="neu-btn mt-12" @click="changeForm">SIGN UP</button>
				</div>
			</div>
		</div>

		@pushOnce('scripts')
			<script>
				function formSwitch() {
					return {
						preventDefault(e) {
							e.preventDefault();
						},
						changeForm() {
							this.$refs.switchContainer.classList.add("animate-auth-slider");
							setTimeout(() => {
								this.$refs.switchContainer.classList.remove("animate-auth-slider");
							}, 1500);

							this.$refs.switchContainer.classList.toggle("left-[calc(100%-400px)]");
							this.$refs.switchContainer.querySelectorAll(".switch-circles").forEach(circle => {
								circle.classList.toggle("left-[calc(100%-400px)]");
							});

							this.$refs.SwitchSignIN.classList.toggle("invisible");
							this.$refs.SwitchSignIN.classList.toggle("opacity-0");
							this.$refs.switchSignUp.classList.toggle("invisible");
							this.$refs.switchSignUp.classList.toggle("opacity-0");

							this.$refs.registerContainer.classList.toggle("left-0");
							this.$refs.registerContainer.classList.toggle("left-[calc(100%-600px)]");
							this.$refs.loginContainer.classList.toggle("left-0");
							this.$refs.loginContainer.classList.toggle("left-[calc(100%-600px)]");

							this.$refs.loginContainer.classList.toggle("z-[200]");
						}
					}
				}

				document.addEventListener('alpine:init', () => {
					Alpine.data('formSwitch', formSwitch);
				});
			</script>
		@endPushOnce
	@break

	{{-- -------------------------------- log-sign-1 -------------------------------- --}}
	@case('log-sign-1')
	@break

	{{-- -------------------------------- default -------------------------------- --}}

	@default
@endswitch
