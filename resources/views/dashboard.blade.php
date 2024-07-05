<x-app-layout>
	<x-slot name="header">
		<h2 class="text-primary text-xl font-semibold leading-tight">
			{{ __('Dashboard') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-dark-text">
					{{ __("You're logged in!") }}
				</div>
			</div>
		</div>
	</div>

	@include('auth.login')

	<div class="py-12">
		<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="bg-secondary overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-dark-text">
					{{ __("You're logged in!") }}
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
