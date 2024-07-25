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
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Select Input">
			<div class="neu-form-group w-full">
				<label class="neu-form-label" for="neu_select">Select</label>
				<select class="neu-form-select" id="neu_select">
					<option value="" disabled selected>Select an option</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>
			</div>
			<x-slot name="cssCode">
				<style>
					.neu-form-select {
						@apply appearance-none bg-primary text-secondary rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none transition duration-300 bg-no-repeat pr-10;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="%23767676" d="M8.037 11.166L14.5 22.36c.825 1.43 2.175 1.43 3 0l6.463-11.195c.826-1.43.15-2.598-1.5-2.598H9.537c-1.65 0-2.326 1.17-1.5 2.6z"/></svg>');
						background-position: right 0.5rem center;
						background-size: 1.5rem 1.5rem;
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Textarea">
			<div class="neu-form-group">
				<label class="neu-form-label" for="textarea">Textarea</label>
				<textarea class="neu-form-textarea scrollbar-thin" id="textarea" rows="2"></textarea>
			</div>

			<x-slot name="cssCode">
				<style>
					.neu-form-textarea {
						@apply bg-primary w-full transition-all duration-500 ease-Out-expo active:placeholder:text-primary focus:placeholder:text-primary placeholder:text-secondary text-secondary appearance-none rounded-lg border border-light-secondary px-3 py-2 font-karla shadow-neu-inset-sm outline-none placeholder:tracking-wide;
						/* dark mode */
						@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
					}

					.scrollbar-thin {
						&::-webkit-scrollbar {
							width: 4px;
							/* Set the width of the scrollbar */
							height: 4px;
							/* Set the height of the scrollbar for vertical scrollbar */
						}

						&::-webkit-scrollbar-thumb {
							background: #888;
							/* Set the color of the scrollbar thumb */
							border-radius: 10px;
							/* Set the border radius of the scrollbar thumb */
						}

						&::-webkit-scrollbar-thumb:hover {
							background: #555;
							/* Set the color of the scrollbar thumb on hover */
						}
					}
				</style>
			</x-slot>
		</x-grid.item>

		<x-grid title="File Uploads">
			<x-slot name="description">
				You can use the file input to allow users to select one or more files from their device storage to be uploaded to a server or manipulated by JavaScript.
			</x-slot>

			<x-grid.item title="Basic File Upload">
				<div class="neu-form-file-group">
					<label for="file">File Upload</label>
					<input class="neu-form-file" id="file" type="file">
				</div>

				<x-slot name="cssCode">
					<style>
						.neu-form-file-group {
							@apply flex flex-col gap-2 w-full;
						}

						.neu-form-file {
							@apply hidden;
						}

						.neu-form-file-group label {
							@apply bg-primary shadow-neu-xs px-4 py-2 rounded-lg text-secondary active:shadow-neu-inset-sm hover:text-primary font-karla cursor-pointer transition duration-300 ease-in-out relative overflow-hidden border border-light-secondary;
							/* dark mode */
							@apply dark:shadow-neu-dark-xs dark:active:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}

						.neu-form-file-group label:after {
							content: "Browse";
							@apply text-secondary bg-secondary px-4 py-2 font-karla absolute top-0 right-0;
						}
					</style>
				</x-slot>
			</x-grid.item>

			<x-grid.item title="File Upload with Preview">
				<div class="neu-form-file-group" x-data="fileUploadPreview()">
					<div class="neu-form-file-preview">
						<template x-if="fileUrl">
							<img class="h-auto max-h-96 max-w-full rounded-md border-light-secondary object-cover" alt="File Preview" :src="fileUrl">
						</template>
						<template x-if="!fileUrl">
							<div class="flex-center text-secondary flex-col gap-2 p-10">
								<x-svg.upload class="size-12" />
								<p>Browse File to upload!</p>
							</div>
						</template>
					</div>
					<label for="file-preview">File Upload</label>
					<input class="neu-form-file" id="file-preview" type="file" @change="previewFile">
				</div>

				<x-slot name="cssCode">
					<style>
						.neu-form-file-group {
							@apply flex flex-col gap-2 w-full;
						}

						.neu-form-file {
							@apply hidden;
						}

						.neu-form-file-group label {
							@apply bg-primary shadow-neu-xs px-4 py-2 rounded-lg text-secondary active:shadow-neu-inset-sm hover:text-primary font-karla cursor-pointer transition duration-300 ease-in-out relative overflow-hidden border border-light-secondary;
							/* dark mode */
							@apply dark:shadow-neu-dark-xs dark:active:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}

						.neu-form-file-group label:after {
							content: "Browse";
							@apply text-secondary bg-secondary px-4 py-2 font-karla absolute top-0 right-0;
						}

						.neu-form-file-preview {
							@apply bg-primary size-fit rounded-lg border border-light-secondary shadow-neu-inset-sm p-3;
							/* dark mode */
							@apply dark:shadow-neu-dark-inset-sm dark:border-dark-secondary;
						}
					</style>
				</x-slot>

				<x-slot name="jsCode">
					<script>
						function fileUploadPreview() {
							return {
								fileUrl: '',
								previewFile(event) {
									const file = event.target.files[0];
									if (file) {
										this.fileUrl = URL.createObjectURL(file);
									} else {
										this.fileUrl = '';
									}
								}
							}
						}
					</script>
				</x-slot>
			</x-grid.item>

		</x-grid>

	</x-grid>

	@pushOnce('scripts')
		<script>
			function fileUploadPreview() {
				return {
					fileUrl: '',
					previewFile(event) {
						const file = event.target.files[0];
						if (file) {
							this.fileUrl = URL.createObjectURL(file);
						} else {
							this.fileUrl = '';
						}
					}
				}
			}
		</script>
	@endPushOnce

</x-app-layout>
