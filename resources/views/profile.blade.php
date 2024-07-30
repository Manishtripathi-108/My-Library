<x-app-layout title="Profile">
	<div class="py-12">
		<div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
			<div class="bg-secondary p-4 shadow sm:rounded-lg sm:p-8">
				<div class="max-w-xl">
					<livewire:profile.update-profile-information-form />
				</div>
			</div>

			<div class="bg-secondary p-4 shadow sm:rounded-lg sm:p-8">
				<div class="max-w-xl">
					<livewire:profile.update-password-form />
				</div>
			</div>

			<div class="bg-secondary p-4 shadow sm:rounded-lg sm:p-8">
				<div class="max-w-xl">
					<livewire:profile.delete-user-form />
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
