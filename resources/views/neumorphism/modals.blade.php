<x-app-layout>

	<x-grid title="Modals">
		<x-slot name="description">
			Modals are used to display content in a layer above the app. They are useful for displaying images, videos, and other content in a small space without leaving the page.
		</x-slot>

		<x-grid.item title="Default Modal">
			<!-- Button to Open Default Modal -->
			<!-- Change the value of the 'open-modal' event to open the modal -->
			<button class="neu-btn" x-on:click="$dispatch('open-modal', 'defaultModal')">Click to Open Default Modal</button>

			<!-- Default Modal -->
			<div class="flex-center fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: none;" x-data="modal()" x-init="init()" x-show="show" x-on:open-modal.window="$event.detail == 'defaultModal' ? show = true : null" x-on:close-modal.window="$event.detail == 'defaultModal' ? show = false : null" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusTargets().focus()" x-on:keydown.shift.tab.prevent="prevFocusTargets().focus()">
				<div class="fixed inset-0 transform transition-all" x-show="show" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
					<div class="bg-primary absolute inset-0 opacity-90"></div>
				</div>

				<div class="bg-primary mb-6 transform overflow-hidden rounded-lg shadow-neu-inset-md transition-all dark:shadow-neu-dark-inset-md sm:mx-auto sm:w-4/12" x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
					<!-- Modal Header -->
					<div class="flex items-center justify-between border-b border-light-secondary px-4 py-3 dark:border-dark-secondary">
						<h3 class="text-primary font-alegreya text-xl tracking-wide">Modal Title</h3>
						<button class="neu-btn neu-icon-only-square-btn" x-on:click="show = false">
							<x-svg.close class="size-4" />
						</button>
					</div>
					<!-- Modal Body -->
					<div class="p-4">
						<p class="text-secondary font-karla text-sm tracking-wide">
							<x-joke /><br /><br />
							<x-joke /><br /><br />
							<x-joke /><br /><br />
							<x-joke />
						</p>
					</div>
					<!-- Modal Footer -->
					<div class="flex justify-end border-t border-light-secondary px-4 py-3 dark:border-dark-secondary">
						<button class="neu-btn text-sm" x-on:click="show = false">Close</button>
					</div>
				</div>
			</div>

			<x-slot name="jsCode">
				<script>
					function modal() {
						return {
							show: false,
							focusTargets() {
								let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
								return [...this.$el.querySelectorAll(selector)]
									.filter(el => !el.hasAttribute('disabled'));
							},
							firstFocusTargets() {
								return this.focusTargets()[0];
							},
							lastFocusTargets() {
								return this.focusTargets().slice(-1)[0];
							},
							nextFocusTargets() {
								return this.focusTargets()[this.nextFocusTargetsIndex()] || this.firstFocusTargets();
							},
							prevFocusTargets() {
								return this.focusTargets()[this.prevFocusTargetsIndex()] || this.lastFocusTargets();
							},
							nextFocusTargetsIndex() {
								return (this.focusTargets().indexOf(document.activeElement) + 1) % (this.focusTargets().length + 1);
							},
							prevFocusTargetsIndex() {
								return Math.max(0, this.focusTargets().indexOf(document.activeElement) - 1);
							},
							init() {
								this.$watch('show', value => {
									if (value) {
										document.body.classList.add('overflow-y-hidden');
										setTimeout(() => this.firstFocusTargets().focus(), 100);
									} else {
										document.body.classList.remove('overflow-y-hidden');
									}
								});
							}
						};
					}
				</script>
			</x-slot>
		</x-grid.item>

		<x-grid.item title="Login Modal">
			<!-- Button to Open Login Modal -->
			<!-- Change the value of the 'open-modal' event to open the modal -->
			<button class="neu-btn" x-on:click="$dispatch('open-modal', 'signUpModal')">Click to Open Sign Up Modal</button>

			<!-- Login Modal -->
			<div class="flex-center fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0" style="display: none;" x-data="modal()" x-init="init()" x-show="show" x-on:open-modal.window="$event.detail == 'signUpModal' ? show = true : null" x-on:close-modal.window="$event.detail == 'signUpModal' ? show = false : null" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-on:keydown.tab.prevent="$event.shiftKey || nextFocusTargets().focus()" x-on:keydown.shift.tab.prevent="prevFocusTargets().focus()">
				<div class="fixed inset-0 transform transition-all" x-show="show" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
					<div class="bg-primary absolute inset-0 opacity-90"></div>
				</div>

				<div class="bg-primary mb-6 transform overflow-hidden rounded-lg shadow-neu-inset-md transition-all dark:shadow-neu-dark-inset-md sm:mx-auto" x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
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
								<p class="inline font-karla text-lg tracking-wide text-gray-600">Already have an account?</p>
								<a class="font-karla text-lg tracking-wide text-blue-500 hover:text-blue-600 focus:border focus:border-black dark:focus:border-white" href="#">Sign In</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

	@pushOnce('scripts')
		<script>
			function modal() {
				return {
					show: false,
					focusTargets() {
						let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
						return [...this.$el.querySelectorAll(selector)]
							.filter(el => !el.hasAttribute('disabled'));
					},
					firstFocusTargets() {
						return this.focusTargets()[0];
					},
					lastFocusTargets() {
						return this.focusTargets().slice(-1)[0];
					},
					nextFocusTargets() {
						return this.focusTargets()[this.nextFocusTargetsIndex()] || this.firstFocusTargets();
					},
					prevFocusTargets() {
						return this.focusTargets()[this.prevFocusTargetsIndex()] || this.lastFocusTargets();
					},
					nextFocusTargetsIndex() {
						return (this.focusTargets().indexOf(document.activeElement) + 1) % (this.focusTargets().length + 1);
					},
					prevFocusTargetsIndex() {
						return Math.max(0, this.focusTargets().indexOf(document.activeElement) - 1);
					},
					init() {
						this.$watch('show', value => {
							if (value) {
								document.body.classList.add('overflow-y-hidden');
								setTimeout(() => this.firstFocusTargets().focus(), 100);
							} else {
								document.body.classList.remove('overflow-y-hidden');
							}
						});
					}
				};
			}
		</script>
	@endPushOnce

</x-app-layout>
