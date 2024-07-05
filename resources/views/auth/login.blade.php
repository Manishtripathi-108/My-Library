<div class="flex items-center justify-center">
	<div class="bg-table h-[550px] w-[350px] overflow-hidden rounded-3xl transition-all duration-500" id="sign_form">
		<div class="mt-4 flex w-full flex-col items-center justify-center">
			<h2 class="text-primary font-bolder cursor-pointer font-playfair text-3xl transition-transform duration-300" id="sign_up">
				<span class="text-secondary hidden transition-transform duration-300">or</span>
				Sign up
			</h2>

			<div class="mx-auto mt-12 w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="sign_inputs">
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="text" placeholder="Name" />
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-y-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="email" placeholder="Email" />
				<input class="bg-secondary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 w-60 rounded-2xl bg-[#00000090] p-4 font-karla font-bold tracking-wider backdrop-blur-sm transition-all duration-300 hover:bg-black hover:text-dark-text hover:backdrop-blur-none" id="sign_btn" type="submit" title="Sign Up">Sign up</button>
		</div>

		<div class="bg-secondary relative flex h-full w-full translate-y-52 transform flex-col items-center justify-start transition-all duration-500" id="login_form">
			<x-svg.curve class="relative bottom-[70px] text-light-secondary" />

			<h2 class="text-primary font-bolder z-10 -mt-[100px] cursor-pointer font-playfair text-3xl transition-transform duration-300" id="login">
				<span class="text-secondary transition-transform duration-300">or</span>
				Log in
			</h2>

			<div class="mx-auto mt-12 hidden w-60 overflow-hidden rounded-2xl transition-opacity duration-300" id="login_inputs">
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border border-x-0 border-b border-t-0 border-gray-500 p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="email" placeholder="Email" />
				<input class="bg-primary focus:placeholder:text-primary focus:text-primary hover:placeholder:text-primary active:text-primary w-full appearance-none border-none p-3 font-karla font-light tracking-wide opacity-80 outline-none transition-all duration-300" type="password" placeholder="Password" />
			</div>
			<button class="mt-2 hidden w-60 rounded-2xl bg-[#85ADC1] p-4 font-karla font-bold tracking-wider transition-all duration-300 hover:bg-black hover:text-dark-text" id="login_btn" title="Log in">Log in</button>
		</div>
	</div>
</div>

@push('scripts')
	<script>
		const toggleForms = (showSignUp) => {
			const loginForm = document.getElementById('login_form');
			const signUpOr = document.querySelector('#sign_up > span');
			const loginOr = document.querySelector('#login > span');

			document.getElementById('sign_inputs').classList.toggle('hidden', !showSignUp);
			document.getElementById('login_inputs').classList.toggle('hidden', showSignUp);
			document.getElementById('sign_btn').classList.toggle('hidden', !showSignUp);
			document.getElementById('login_btn').classList.toggle('hidden', showSignUp);
			loginForm.classList.toggle('translate-y-52', showSignUp);
			loginForm.classList.toggle('translate-y-16', !showSignUp);
			signUpOr.classList.toggle('hidden', !showSignUp);
			loginOr.classList.toggle('hidden', showSignUp);
		};

		document.getElementById('sign_up').addEventListener('click', () => toggleForms(true));
		document.getElementById('login').addEventListener('click', () => toggleForms(false));
	</script>
@endpush
