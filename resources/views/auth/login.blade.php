<div class="flex items-center justify-center">
	<div class="bg-table h-[550px] w-[350px] overflow-hidden rounded-3xl transition-all duration-500" id="sign_form">
		<form class="mt-4 flex w-full flex-col items-center justify-center">
			<button class="font-bolder z-10 mt-12 cursor-pointer font-playfair text-3xl text-light-primary transition-transform duration-300" id="sign_up">
				<span class="hidden text-sm text-light-secondary transition-transform duration-300 dark:text-gray-300">or</span>
				Sign up
			</button>

			<div class="mx-auto mt-12 w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="sign_inputs">
				<input class="bg-secondary active:bg-primary focus:bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300 hover:bg-dark-primary" type="text" placeholder="Name" />
				<input class="bg-secondary active:bg-primary focus:bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-y-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300 hover:bg-dark-primary" type="email" placeholder="Email" />
				<input class="bg-secondary active:bg-primary focus:bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300 hover:bg-dark-primary" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 w-60 rounded-2xl bg-[#00000090] p-4 font-karla font-bold tracking-wider text-light-secondary backdrop-blur-sm transition-all duration-300 hover:bg-black hover:text-dark-text hover:backdrop-blur-none focus:bg-black dark:bg-[#FFE9D090] dark:text-light-text dark:hover:bg-[#FFE9D0] dark:hover:text-dark-primary dark:focus:bg-[#FFE9D0] dark:focus:text-dark-primary" id="sign_btn" type="submit" title="Sign Up">Sign up</button>
		</form>

		<form class="bg-secondary relative flex h-full w-full translate-y-40 transform flex-col items-center justify-start transition-all duration-500" id="login_form">
			<x-svg.curve class="relative bottom-[70px] text-light-secondary dark:text-dark-secondary" />

			<button class="text-primary font-bolder z-10 -mt-[100px] cursor-pointer font-playfair text-3xl transition-transform duration-300" id="login">
				<span class="text-secondary text-sm transition-transform duration-300">or</span>
				Log in
			</button>

			<div class="mx-auto mt-12 w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="login_inputs">
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-b border-t-0 border-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="email" placeholder="Email" />
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 w-60 rounded-2xl bg-[#85ADC1] p-4 font-karla font-bold tracking-wider transition-all duration-300 hover:bg-black hover:text-dark-text dark:hover:bg-[#FFE9D0] dark:hover:text-dark-primary" id="login_btn" title="Log in">Log in</button>
		</form>
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

		let enableShowSignUp = false;

		const toggleForms = (showSignUp) => {
			// Prevent redundant animation if sign-up form is already visible on page load
			if (!enableShowSignUp && showSignUp) {
				return
			};

			// Login Prompt
			login.classList.toggle('-mt-[50px]', !showSignUp);
			loginForm.classList.toggle('animate-auth-slide-bottom', showSignUp);
			loginForm.classList.toggle('animate-auth-slide-top', !showSignUp);
			loginInputs.classList.toggle('animate-auth-scale-down-center', showSignUp);
			loginInputs.classList.toggle('animate-auth-scale-up-center', !showSignUp);
			loginBtn.classList.toggle('animate-auth-scale-down-center', showSignUp);
			loginBtn.classList.toggle('animate-auth-scale-up-center', !showSignUp);

			// Sign Up Prompt
			signUp.classList.toggle('mt-12', showSignUp);
			signInputs.classList.toggle('animate-auth-scale-up-center', showSignUp);
			signInputs.classList.toggle('animate-auth-scale-down-center', !showSignUp);
			signBtn.classList.toggle('animate-auth-scale-up-center', showSignUp);
			signBtn.classList.toggle('animate-auth-scale-down-center', !showSignUp);

			// Hide or show the 'or' text
			signUpOr.classList.toggle('hidden', showSignUp);
			loginOr.classList.toggle('hidden', !showSignUp);

			// Change the font size of the form title
			document.getElementById('sign_up').classList.toggle('text-lg', !showSignUp);
			document.getElementById('login').classList.toggle('text-lg', showSignUp);

			enableShowSignUp = true;
		};

		document.getElementById('sign_up').addEventListener('click', () => toggleForms(true));
		document.getElementById('login').addEventListener('click', () => toggleForms(false));
	</script>
@endpush
