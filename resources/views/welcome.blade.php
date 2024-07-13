<x-app-layout title="Welcome Page">
	<x-slot name="header">
		<h2 class="text-secondary text-xl font-semibold leading-tight dark:text-dark-text">
			{{ __('Welcome To Home Page') }}
		</h2>
	</x-slot>
	<div class="*:flex *:text-xs *:items-center *:justify-center m-5 grid grid-cols-4 gap-4 md:grid-cols-8">
		{{-- Auth --}}
		<a class="neu-btn" href="{{ route('register') }}">Register</a>
		<a class="neu-btn" href="{{ route('login') }}">Login</a>

		{{-- Pages --}}
		<a class="neu-btn" href="{{ route('book-page') }}">Book</a>
		<a class="neu-btn" href="{{ route('background-building') }}">Background Building</a>
		<a class="neu-btn" href="{{ route('background-sunrise') }}">Background Sunrise</a>
		<a class="neu-btn" href="{{ route('order-confirmation') }}">Order Confirm</a>

		{{-- Auth Page --}}
		<a class="neu-btn" href="{{ route('auth.login-signup') }}">Auth Page</a>

		{{-- Cards --}}
		<a class="neu-btn" href="{{ route('cards') }}">Cards</a>

		{{-- Buttons --}}
		<a class="neu-btn" href="{{ route('buttons') }}">Buttons</a>

		{{-- Neumorphism --}}
		<a class="neu-btn" href="{{ route('neumorphism') }}">Neumorphism</a>
		<a class="neu-btn" href="{{ route('neumorphism.shadows') }}">Neumorphism Shadows</a>

	</div>

	<div class="flex-center mt-10 p-10">

		<div class="bg-primary relative h-[600px] w-[1000px] overflow-hidden rounded-xl p-6 shadow-neu-lg dark:shadow-neu-dark-lg" x-data="formSwitch()">
			<!-- Form Container A: Create Account -->
			<div class="bg-primary absolute left-[calc(100%-600px)] top-0 z-[100] flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="aContainer">
				<form class="flex h-full w-full flex-col items-center justify-center" method="" action="" x-ref="aForm">
					<h2 class="form_title text-primary text-3xl font-bold leading-[3]">Create Account</h2>
					<div class="flex-center">
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
					</div>
					<span class="mb-3 mt-8">or use email for registration</span>
					<input class="bg-primary my-1 w-3/5 rounded-lg border-none py-2 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs" type="text" placeholder="Name">
					<input class="bg-primary my-1 w-3/5 rounded-lg border-none py-2 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs" type="text" placeholder="Email">
					<input class="bg-primary my-1 w-3/5 rounded-lg border-none py-2 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs" type="password" placeholder="Password">
					<button class="neu-btn mt-3" @click.prevent="preventDefault">SIGN UP</button>
				</form>
			</div>

			<!-- Form Container B: Sign In -->
			<div class="bg-primary absolute left-[calc(100%-600px)] top-0 z-0 flex h-full w-3/5 items-center justify-center p-6 transition-all duration-[1.25s]" x-ref="bContainer">
				<form class="flex h-full w-full flex-col items-center justify-center" x-ref="bForm" method="" action="">
					<h2 class="form_title text-primary text-3xl font-bold leading-[3]">Sign in to Website</h2>
					<div class="flex-center">
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
						<x-svg.lock class="size-7" />
					</div>
					<span class="mb-3 mt-8">or use your email account</span>
					<input class="bg-primary my-1 w-3/5 rounded-lg border-none py-2 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs" type="text" placeholder="Email">
					<input class="bg-primary my-1 w-3/5 rounded-lg border-none py-2 pl-6 text-sm tracking-wider shadow-neu-inset-xs outline-none transition-all duration-[1.25s] focus:shadow-neu-xs" type="password" placeholder="Password">
					<a class="text-primary mt-6 border-b border-solid border-b-[#a0a5a8] text-[15px] leading-loose">Forgot your password?</a>
					<button class="neu-btn mt-3" @click.prevent="preventDefault">SIGN IN</button>
				</form>
			</div>

			<!-- Switch Container -->
			<div class="bg-primary absolute left-0 top-0 z-[200] flex h-full w-2/5 items-center justify-center overflow-hidden p-[50px] shadow-[4px_4px_10px_#d1d9e6,-4px_-4px_10px_#f9f9f9] transition-all duration-[1.25s]" x-ref="switchCtn">
				<!-- Background Circles for Animation -->
				<div class="switch__circle bg-primary absolute bottom-[-60%] left-[-60%] h-[500px] w-[500px] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s]"></div>
				<div class="switch__circle bg-primary size-[350px] absolute bottom-[-60%] left-[-60%] top-[-30%] rounded-full shadow-neu-inset-sm transition-all duration-[1.25s]"></div>

				<!-- Switch Content 1: Sign In -->
				<div class="px-13 absolute flex w-full flex-col items-center justify-center py-12 transition-all duration-[1.25s]" x-ref="switchC1">
					<h2 class="switch__title text-3xl font-bold leading-[3] text-[#181818]">Welcome Back !</h2>
					<p class="switch__description text-center text-sm leading-[1.6] tracking-[0.25px]">To keep connected with us please login with your personal info</p>
					<button class="neu-btn mt-3" @click="changeForm">SIGN IN</button>
				</div>

				<!-- Switch Content 2: Sign Up -->
				<div class="px-13 invisible absolute flex w-full flex-col items-center justify-center py-12 opacity-0 transition-all duration-[1.25s]" x-ref="switchC2">
					<h2 class="switch__title text-3xl font-bold leading-[3] text-[#181818]">Hello Friend !</h2>
					<p class="switch__description text-center text-sm leading-[1.6] tracking-[0.25px]">Enter your personal details and start journey with us</p>
					<button class="neu-btn mt-3" @click="changeForm">SIGN UP</button>
				</div>
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
						this.$refs.switchCtn.classList.add("animate-auth-slider");
						setTimeout(() => {
							this.$refs.switchCtn.classList.remove("animate-auth-slider");
						}, 1500);

						this.$refs.switchCtn.classList.toggle("left-[calc(100%-400px)]");
						this.$refs.switchCtn.querySelectorAll(".switch__circle").forEach(circle => {
							circle.classList.toggle("left-[calc(100%-400px)]");
						});

						this.$refs.switchC1.classList.toggle("invisible");
						this.$refs.switchC1.classList.toggle("opacity-0");
						this.$refs.switchC2.classList.toggle("invisible");
						this.$refs.switchC2.classList.toggle("opacity-0");

						this.$refs.aContainer.classList.toggle("left-0");
						this.$refs.aContainer.classList.toggle("left-[calc(100%-600px)]");
						this.$refs.bContainer.classList.toggle("left-0");
						this.$refs.bContainer.classList.toggle("left-[calc(100%-600px)]");

						this.$refs.bContainer.classList.toggle("z-[200]");
					}
				}
			}

			document.addEventListener('alpine:init', () => {
				Alpine.data('formSwitch', formSwitch);
			});
		</script>
	@endPushOnce
</x-app-layout>
