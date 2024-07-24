<x-app-layout>

	<x-grid title="Forms">
		<x-slot name="description">
			Forms are used to collect user input. Use input elements like text fields, buttons, checkboxes, radio buttons, and many more.
		</x-slot>

		<x-grid.item title="Form Input">
			<form class="w-full md:w-2/3" action="#">
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

		<x-grid.item title="Form with Icons">
			<div class="w-full md:w-2/3">
				<div class="neu-input-group neu-input-group-prepend">
					<x-svg.ex class="neu-input-icon" />
					<input class="neu-form-input" type="text" placeholder="Icon Left" />
				</div>

				<div class="neu-input-group neu-input-group-append mt-4">
					<input class="neu-form-input" type="text" placeholder="Icon Right" />
					<x-svg.ex class="neu-input-icon" />
				</div>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-input {
						@apply bg-primary w-full active:placeholder:text-primary focus:placeholder:text-primary placeholder:text-secondary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide transition duration-300;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					/*-- ------ neu-input-group & Icon ------ */
					.neu-input-group {
						@apply flex w-full items-center rounded-lg border border-light-secondary dark:border-dark-secondary;
					}

					.neu-input-icon {
						@apply size-10 text-secondary border-r border-light-secondary px-2 py-1 dark:border-dark-secondary;
					}

					.neu-input-group-prepend .neu-form-input {
						@apply rounded-r-lg rounded-l-none;
					}

					.neu-input-group-append .neu-form-input {
						@apply rounded-l-lg rounded-r-none;
					}

					.neu-input-group .neu-form-input {
						@apply border-none;
					}

					.neu-input-group:hover .neu-form-input,
					.neu-input-group:focus .neu-form-input,
					.neu-input-group:hover .neu-input-icon,
					.neu-input-group:focus .neu-input-icon {
						@apply placeholder:text-primary text-primary;
					}
				</style>

		</x-grid.item>

	</x-grid>

</x-app-layout>
