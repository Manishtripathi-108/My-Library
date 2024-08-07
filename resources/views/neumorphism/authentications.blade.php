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

		<x-grid.item title="Sign In">
			<div class="bg-primary w-full max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="{ showForm: true }" x-show="showForm" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
				<h2 class="text-secondary mb-4 text-2xl font-bold">Sign In</h2>
				<form class="space-y-4" action="#" method="POST">
					<div>
						<label class="text-secondary mb-2 block" for="email">Email Address</label>
						<input class="bg-primary focus:ring-primary w-full rounded-lg px-4 py-2 shadow-neu-inset-sm focus:border-transparent focus:outline-none focus:ring-2 dark:shadow-neu-dark-inset-sm" id="email" name="email" type="email" placeholder="Enter your email">
					</div>
					<div>
						<label class="text-secondary mb-2 block" for="password">Password</label>
						<input class="bg-primary focus:ring-primary w-full rounded-lg px-4 py-2 shadow-neu-inset-sm focus:border-transparent focus:outline-none focus:ring-2 dark:shadow-neu-dark-inset-sm" id="password" name="password" type="password" placeholder="Enter your password">
					</div>
					<div class="flex items-center justify-between">
						<label class="text-secondary flex items-center">
							<input class="neu-form-checkbox mr-2" type="checkbox" checked>
							Remember Me
						</label>
						<a class="text-primary hover:underline" href="#">Forgot Password?</a>
					</div>
					<button class="neu-btn mx-auto" type="submit">Sign In</button>
				</form>
			</div>
		</x-grid.item>

		<x-grid.item title="Register & Login">
			<div class="bg-primary relative h-[600px] w-full overflow-hidden rounded-xl p-6 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="formSwitch()">
				<!-- Register Container -->
				<!-- left-[40%] is the initial position of the container, where 40% is width of switch container -->
				<div class="bg-primary absolute left-[40%] top-0 z-0 flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="registerContainer">
					<form class="flex h-full w-full flex-col items-center justify-center" method="post" action="/register">
						<h2 class="form_title text-primary mb-8 text-3xl font-bold">Create Account</h2>
						<div class="flex-center text-primary gap-5">
							<x-svg.google class="size-7" />
							<x-svg.facebook class="size-7" />
							<x-svg.twitter class="size-7" />
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

						<button class="neu-btn mt-12" @click.prevent="register">SIGN UP</button>
					</form>
				</div>

				<!-- Login Container -->
				<div class="bg-primary absolute left-[40%] top-0 z-[100] flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="loginContainer">
					<form class="flex h-full w-full flex-col items-center justify-center" method="post" action="/login">
						<h2 class="form_title text-primary mb-8 text-3xl font-bold">Sign in to Website</h2>
						<div class="flex-center text-primary gap-5">
							<x-svg.google class="size-7" />
							<x-svg.facebook class="size-7" />
							<x-svg.twitter class="size-7" />
						</div>
						<span class="text-secondary mb-3 mt-8">or use your email account</span>

						@for ($i = 1; $i < 3; $i++)
							<input class="{{ $class }}" type="{{ $types[$i] }}" placeholder="{{ $placeholder[$i] }}">
						@endfor

						<a class="text-primary mb-8 mt-6 border-b border-solid border-b-[#a0a5a8] text-[15px]" href="#">Forgot your password?</a>
						<button class="neu-btn mt-12" @click.prevent="login">SIGN IN</button>
					</form>
				</div>

				<!-- Switch Container -->
				<div class="bg-primary absolute left-0 top-0 z-[200] flex h-full w-2/5 items-center justify-center overflow-hidden p-[50px] shadow-neu-md-soft transition-all duration-[1.25s] dark:shadow-neu-dark-md" x-ref="switchContainer">
					<!-- Background Circles for Animation -->
					<div class="switch-circles bg-primary size-[500px] absolute bottom-[-60%] left-[-60%] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s] dark:shadow-neu-dark-inset-sm"></div>
					<div class="switch-circles bg-primary size-[350px] absolute bottom-[-60%] left-[-60%] top-[-30%] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s] dark:shadow-neu-dark-inset-sm"></div>

					<!-- Login -->
					<div class="px-13 absolute flex w-full flex-col items-center justify-center py-12 transition-all duration-[1.25s]" x-ref="switchSignIN">
						<h2 class="text-primary mb-8 text-3xl font-bold">Welcome Back !</h2>
						<p class="text-secondary px-2 text-center text-sm leading-relaxed tracking-wide">
							To keep connected with us please login with your personal info.
						</p>
						<button class="neu-btn mt-12" @click="changeForm">SIGN IN</button>
					</div>

					<!-- Register -->
					<div class="px-13 invisible absolute flex w-full flex-col items-center justify-center py-12 opacity-0 transition-all duration-[1.25s]" x-ref="switchSignUp">
						<h2 class="text-primary mb-8 text-3xl font-bold">Hello Friend !</h2>
						<p class="text-secondary px-2 text-center text-sm leading-relaxed tracking-wide">
							Enter your personal details and start your journey with us.
						</p>
						<button class="neu-btn mt-12" @click="changeForm">SIGN UP</button>
					</div>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function formSwitch() {
						return {
							preventDefault(e) {
								e.preventDefault();
							},
							changeForm() {
								const {
									switchContainer,
									switchSignIN,
									switchSignUp,
									registerContainer,
									loginContainer
								} = this.$refs;

								// Add Animation Class to the Switch Container
								switchContainer.classList.add("animate-auth-slider");
								setTimeout(() => {
									switchContainer.classList.remove("animate-auth-slider");
								}, 1500);

								const toggleClasses = (element, classes) => {
									classes.forEach(cls => element.classList.toggle(cls));
								};

								toggleClasses(switchContainer, ["left-[60%]"]);
								switchContainer.querySelectorAll(".switch-circles").forEach(circle => {
									toggleClasses(circle, ["left-[60%]"]);
								});

								toggleClasses(switchSignIN, ["invisible", "opacity-0"]);
								toggleClasses(switchSignUp, ["invisible", "opacity-0"]);

								toggleClasses(registerContainer, ["left-0", "left-[40%]", "z-[200]"]);
								toggleClasses(loginContainer, ["left-0", "left-[40%]"]);
							}
						}
					}

					document.addEventListener('alpine:init', () => {
						Alpine.data('formSwitch', formSwitch);
					});
				</script>
			</x-slot>

			@pushOnce('scripts')
				<script>
					function formSwitch() {
						return {
							preventDefault(e) {
								e.preventDefault();
							},
							changeForm() {
								const {
									switchContainer,
									switchSignIN,
									switchSignUp,
									registerContainer,
									loginContainer
								} = this.$refs;

								// Add Animation Class to the Switch Container
								switchContainer.classList.add("animate-auth-slider");
								setTimeout(() => {
									switchContainer.classList.remove("animate-auth-slider");
								}, 1500);

								const toggleClasses = (element, classes) => {
									classes.forEach(cls => element.classList.toggle(cls));
								};

								toggleClasses(switchContainer, ["left-[60%]"]);
								switchContainer.querySelectorAll(".switch-circles").forEach(circle => {
									toggleClasses(circle, ["left-[60%]"]);
								});

								toggleClasses(switchSignIN, ["invisible", "opacity-0"]);
								toggleClasses(switchSignUp, ["invisible", "opacity-0"]);

								toggleClasses(registerContainer, ["left-0", "left-[40%]", "z-[200]"]);
								toggleClasses(loginContainer, ["left-0", "left-[40%]"]);
							}
						}
					}

					document.addEventListener('alpine:init', () => {
						Alpine.data('formSwitch', formSwitch);
					});
				</script>
			@endPushOnce
		</x-grid.item>

		<x-grid.item title="Email Verification">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Email Verification</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Please verify your email to proceed.</p>
				<input class="neu-form-input" type="email" placeholder="Enter your email">
				<button class="neu-btn ml-auto mt-4 w-fit">Verify Email</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Forgot Password">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Forgot Password</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Enter your email to reset your password.</p>
				<input class="neu-form-input" type="email" placeholder="Enter your email">
				<button class="neu-btn ml-auto mt-4 w-fit">Send Reset Link</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Reset Password">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Reset Password</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Enter your new password below.</p>
				<input class="neu-form-input mb-3" type="password" placeholder="New Password">
				<input class="neu-form-input" type="password" placeholder="Confirm New Password">
				<button class="neu-btn ml-auto mt-4 w-fit">Reset Password</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Two Factor Challenge">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Two Factor Challenge</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Enter the code sent to your device.</p>
				<input class="neu-form-input" type="text" placeholder="Authentication Code">
				<button class="neu-btn ml-auto mt-4 w-fit">Verify Code</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Confirm Password">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Confirm Password</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Please confirm your password to continue.</p>
				<input class="neu-form-input" type="password" placeholder="Password">
				<button class="neu-btn ml-auto mt-4 w-fit">Confirm Password</button>
			</div>
		</x-grid.item>

		<x-grid.item title="Logout">
			<div class="neu-form-group bg-primary max-w-md rounded-lg p-6 shadow-neu-lg dark:shadow-neu-dark-lg">
				<h2 class="neu-form-label mb-3 font-playfair text-lg font-bold tracking-wide">Logout</h2>
				<p class="neu-form-text mb-3 font-karla text-base">Are you sure you want to logout?</p>
				<button class="neu-btn ml-auto mt-4 w-fit">Logout</button>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
