<x-app-layout>

	<x-grid title="Forms">
		<x-slot name="description">
			Forms are used to collect user input. Use input elements like text fields, buttons, checkboxes, radio buttons, and many more.
		</x-slot>

		<x-grid.item title="Form Input">
			<form class="w-2/3" action="#">
				<div class="neu-form-group mb-4">
					<label class="neu-form-label" for="email">Email address</label>
					<input class="neu-form-input" id="email" type="email">
					<small class="neu-form-text" id="emailHelp">We'll never share your email with anyone else.</small>
				</div>
				<div class="neu-form-group mb-4">
					<label class="neu-form-label" for="password">Password</label>
					<input class="neu-form-input" id="password" type="password">
				</div>
				<div class="mb-4">
					<label class="neu-form-label" for="remember">
						<input class="neu-form-checkbox" id="remember" type="checkbox" value="">Remember me
					</label>
				</div>
				<button class="neu-btn" type="submit">Submit</button>
			</form>

			<x-slot name="cssCode">
				<style>
					.neu-form-group {
						@apply flex flex-col gap-2;
					}

					.neu-form-label {
						@apply text-secondary font-karla text-sm leading-3;
					}

					.neu-form-text {
						@apply text-secondary font-karla text-xs leading-3;
					}

					.neu-form-input {
						@apply bg-primary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					.neu-form-check {
						@apply flex items-center gap-2;
					}

					.neu-form-checkbox {
						@apply bg-primary flex-center size-4 appearance-none rounded border border-light-secondary shadow-neu-inset-xs outline-none transition duration-300 ease-in-out placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-xs dark:border-dark-secondary;
					}

					.neu-form-checkbox:checked {
						@apply bg-primary text-primary flex-center;
					}

					.neu-form-checkbox:checked:after {
						content: "\2713";
						@apply text-primary size-full flex-center font-bold transition-all;
					}

					.neu-form-checkbox:checked:after {
						transform: scale(0.8);
					}
				</style>
			</x-slot>
		</x-grid.item>

	</x-grid>

</x-app-layout>
