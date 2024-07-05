<div class="flex items-center justify-center">
	<div class="bg-table group h-[550px] w-[350px] overflow-hidden rounded-3xl transition-all duration-500" id="sign_form">
		<div class="mt-4 flex w-full flex-col items-center justify-center">
			<h2 class="text-primary font-bolder mt-12 cursor-pointer font-playfair text-3xl transition-transform duration-300" id="sign_up">
				<span class="text-secondary hidden text-sm transition-transform duration-300">or</span>
				Sign up
			</h2>

			<div class="mx-auto mt-12 w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="sign_inputs">
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="text" placeholder="Name" />
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-y-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="email" placeholder="Email" />
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 w-60 rounded-2xl bg-[#00000090] p-4 font-karla font-bold tracking-wider backdrop-blur-sm transition-all duration-300 hover:bg-black hover:text-dark-text hover:backdrop-blur-none" id="sign_btn" type="submit" title="Sign Up">Sign up</button>
		</div>

		<div class="bg-secondary relative flex h-full w-full translate-y-40 transform flex-col items-center justify-start transition-all duration-500" id="login_form">
			<x-svg.curve class="relative bottom-[70px] text-light-secondary" />

			<h2 class="text-primary font-bolder z-10 -mt-[100px] cursor-pointer font-playfair text-3xl transition-transform duration-300" id="login">
				<span class="text-secondary text-sm transition-transform duration-300">or</span>
				Log in
			</h2>

			<div class="mx-auto mt-12 w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="login_inputs">
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-b border-t-0 border-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="email" placeholder="Email" />
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 w-60 rounded-2xl bg-[#85ADC1] p-4 font-karla font-bold tracking-wider transition-all duration-300 hover:bg-black hover:text-dark-text" id="login_btn" title="Log in">Log in</button>
		</div>
	</div>
</div>

@push('scripts')
	<script>
		const signUp = document.getElementById('sign_up');
		const login = document.getElementById('login');
		const signUpOr = document.querySelector('#sign_up > span');
		const signInputs = document.getElementById('sign_inputs');
		const signBtn = document.getElementById('sign_btn');
		const loginForm = document.getElementById('login_form');
		const loginOr = document.querySelector('#login > span');
		const loginInputs = document.getElementById('login_inputs');
		const loginBtn = document.getElementById('login_btn');

		const toggleForms = (showSignUp) => {
			signInputs.classList.toggle('hidden', !showSignUp);
			loginInputs.classList.toggle('hidden', showSignUp);
			signBtn.classList.toggle('hidden', !showSignUp);
			loginBtn.classList.toggle('hidden', showSignUp);
			loginForm.classList.toggle('translate-y-40', showSignUp); //208px
			loginForm.classList.toggle('translate-y-16', !showSignUp); //64px
			signUpOr.classList.toggle('hidden', !showSignUp);
			loginOr.classList.toggle('hidden', showSignUp);

			if (showSignUp) {
				loginForm.classList.add('translate-y-40');
				loginForm.classList.remove('translate-y-16');
				loginForm.classList.remove('animate-slide-bottom');
			} else {
				loginForm.classList.add('translate-y-16');
				loginForm.classList.remove('translate-y-40');
				loginForm.classList.remove('animate-slide-top');
			}
		};

		let enableShowSignUp = false;

		const animate = (showSignUp) => {

			// Prevent redundant animation if sign-up form is already visible on page load
			if (!enableShowSignUp && showSignUp) {
				return
			};

			
			loginForm.classList.toggle('animate-slide-bottom', showSignUp);
			loginForm.classList.toggle('animate-slide-top', !showSignUp);
			loginInputs.classList.toggle('animate-scale-down-center', showSignUp);
			loginInputs.classList.toggle('animate-scale-up-center', !showSignUp);
			signUp.classList.toggle('mt-12', showSignUp);
			login.classList.toggle('-mt-[50px]', !showSignUp);
			signInputs.classList.toggle('animate-scale-up-center', showSignUp);
			signInputs.classList.toggle('animate-scale-down-center', !showSignUp);
			signBtn.classList.toggle('animate-scale-up-center', showSignUp);
			signBtn.classList.toggle('animate-scale-down-center', !showSignUp);
			loginBtn.classList.toggle('animate-scale-down-center', showSignUp);
			loginBtn.classList.toggle('animate-scale-up-center', !showSignUp);
			signUpOr.classList.toggle('hidden', showSignUp);
			loginOr.classList.toggle('hidden', !showSignUp);




			document.getElementById('sign_up').classList.toggle('text-lg', !showSignUp);
			document.getElementById('login').classList.toggle('text-lg', showSignUp);

			enableShowSignUp = true;

			// Todo: Fix the issue with smooth transition
			// setTimeout(() => toggleForms(showSignUp), 300);
		};

		document.getElementById('sign_up').addEventListener('click', () => animate(true));
		document.getElementById('login').addEventListener('click', () => animate(false));
	</script>
@endpush
