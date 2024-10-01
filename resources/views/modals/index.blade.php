<x-app-layout title="Modals">

	<div class="" x-data="{ openModal: null }">
		<x-grid title="Modals">
			<x-slot name="description">
				Modals are a great way to display content on top of the current page. They can be used for a variety of purposes, such as displaying images, videos, or forms. In this section, you will find a collection of modals that you can use in your projects.
			</x-slot>

			<x-grid.item title="simple Modal">
				<!-- Trigger Button -->
				<x-primary-btn id="openModalBtn">Open Modal</x-primary-btn>

				<x-slot name="modal">
					<!-- Modal -->
					<div class="fixed inset-0 z-50 hidden overflow-y-auto" id="myModal" role="dialog" aria-labelledby="modal-title" aria-modal="true">
						<!-- Background backdrop -->
						<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

						<div class="flex min-h-screen items-center justify-center">
							<div class="relative rounded-lg bg-white shadow-xl sm:w-full sm:max-w-lg">
								<!-- Modal Content -->
								<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
									<div class="sm:flex sm:items-start">
										<div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
											<svg class="h-6 w-6 text-red-600" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
											</svg>
										</div>
										<div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
											<h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
											<div class="mt-2">
												<p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Modal Footer -->
								<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
									<button class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto" id="confirmDeactivateBtn" type="button">Deactivate</button>
									<button class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" id="closeModalBtn" type="button">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</x-slot>

				<x-slot name="jsCode">
					<script>
						const openModalBtn = document.getElementById('openModalBtn');
						const closeModalBtn = document.getElementById('closeModalBtn');
						const confirmDeactivateBtn = document.getElementById('confirmDeactivateBtn');
						const modal = document.getElementById('myModal');

						openModalBtn.addEventListener('click', () => {
							modal.classList.remove('hidden');
						});

						closeModalBtn.addEventListener('click', () => {
							modal.classList.add('hidden');
						});

						confirmDeactivateBtn.addEventListener('click', () => {
							alert('Account deactivated successfully!');
							modal.classList.add('hidden');
						});
					</script>
				</x-slot>

			</x-grid.item>

			<x-grid.item title="Unfolding">
				<!-- Trigger Button -->
				<x-primary-btn class="button" @click="openModal = 'unfolding'">Unfolding</x-primary-btn>

				<x-slot name="modal">
					<!-- Unfolding Modal -->
					<!-- https://codepen.io/designcouch/pen/obvKxm -->
					<div class="fixed inset-0 z-50 overflow-y-auto" x-show="openModal === 'unfolding'" x-transition:enter="animate-unfoldIn" x-transition:leave="animate-unfoldOut">
						<!-- Background backdrop -->
						<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" @click="openModal = null"></div>

						<div class="flex min-h-screen scale-0 animate-zoomIn items-center justify-center" x-show="openModal === 'unfolding'" x-transition:leave="animate-zoomOut scale-1">
							<div class="relative rounded-lg bg-white shadow-xl sm:w-full sm:max-w-lg">
								<!-- Modal Content -->
								<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
									<h2>Unfolding Modal</h2>
									<p>This is the content for the unfolding modal.</p>
									<button class="mt-4 rounded bg-blue-500 px-4 py-2 text-white" @click="openModal = null">Close</button>
								</div>
							</div>
						</div>
					</div>
				</x-slot>

				<x-slot name="cssCode">
					<style>
						@keyframes unfoldIn {
							0% {
								transform: scaleY(0.005) scaleX(0);
							}

							50% {
								transform: scaleY(0.005) scaleX(1);
							}

							100% {
								transform: scaleY(1) scaleX(1);
							}
						}

						@keyframes unfoldOut {
							0% {
								transform: scaleY(1) scaleX(1);
							}

							50% {
								transform: scaleY(0.005) scaleX(1);
							}

							100% {
								transform: scaleY(0.005) scaleX(0);
							}
						}

						@keyframes zoomIn {
							0% {
								transform: scale(0);
							}

							100% {
								transform: scale(1);
							}
						}

						@keyframes zoomOut {
							0% {
								transform: scale(1);
							}

							100% {
								transform: scale(0);
							}
						}
					</style>
				</x-slot>
			</x-grid.item>
		</x-grid>
	</div>

	@pushOnce('scripts')
		<script>
			const openModalBtn = document.getElementById('openModalBtn');
			const closeModalBtn = document.getElementById('closeModalBtn');
			const confirmDeactivateBtn = document.getElementById('confirmDeactivateBtn');
			const modal = document.getElementById('myModal');

			openModalBtn.addEventListener('click', () => {
				modal.classList.remove('hidden');
			});

			closeModalBtn.addEventListener('click', () => {
				modal.classList.add('hidden');
			});

			confirmDeactivateBtn.addEventListener('click', () => {
				alert('Account deactivated successfully!');
				modal.classList.add('hidden');
			});
		</script>
	@endPushOnce
</x-app-layout>
