<x-app-layout title="Alerts">

	<x-grid title="Alerts">
		<x-slot name="description">
			Alerts are used to provide feedback to the user about the status of a task or action. They are used to inform users about successful or unsuccessful actions, errors, warnings, or other important information.
		</x-slot>

		<x-grid.item title="Notification Pop">
			<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
				<div class="bg-highlight w-2"></div>

				<div class="flex items-center px-2 py-3">
					<img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/square/man-orange.png') }}" alt="User avatar">

					<div class="mx-3">
						<p class="text-primary">Sara has replied on the <a class="text-highlight hover:text-accent hover:underline">uploaded image</a>.</p>
					</div>
				</div>
			</div>
		</x-grid.item>

		<x-grid title="Pops">
			<x-slot name="description">
				Pops are used to provide feedback to the user about the status of a task or action. They are used to inform users about successful or unsuccessful actions, errors, warnings, or other important information.
			</x-slot>

			<!-- Success Pop -->
			<x-grid.item title="Success">
				<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
					<div class="flex w-12 items-center justify-center bg-emerald-500 text-white">
						<x-svg.avengers-symbol class="size-7" />
					</div>
					<div class="-mx-3 px-4 py-2">
						<div class="mx-3">
							<span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
							<p class="text-sm text-gray-600 dark:text-gray-200">Your account was registered!</p>
						</div>
					</div>
				</div>
			</x-grid.item>

			<!-- Error Pop -->
			<x-grid.item title="Error">
				<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
					<div class="flex w-12 items-center justify-center bg-red-500 text-white">
						<x-svg.thor class="size-7" />
					</div>
					<div class="-mx-3 px-4 py-2">
						<div class="mx-3">
							<span class="font-semibold text-red-500 dark:text-red-400">Error</span>
							<p class="text-sm text-gray-600 dark:text-gray-200">Something went wrong, please try again!</p>
						</div>
					</div>
				</div>
			</x-grid.item>

			<!-- Warning Pop -->
			<x-grid.item title="Warning">
				<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
					<div class="flex w-12 items-center justify-center bg-yellow-500 text-white">
						<x-svg.spiderman class="size-7" />
					</div>
					<div class="-mx-3 px-4 py-2">
						<div class="mx-3">
							<span class="font-semibold text-yellow-500 dark:text-yellow-400">Warning</span>
							<p class="text-sm text-gray-600 dark:text-gray-200">Please check your input before proceeding!</p>
						</div>
					</div>
				</div>
			</x-grid.item>

			<!-- Info Pop -->
			<x-grid.item title="Info">
				<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
					<div class="flex w-12 items-center justify-center bg-blue-500 text-white">
						<x-svg.captain-america class="size-7" />
					</div>
					<div class="-mx-3 px-4 py-2">
						<div class="mx-3">
							<span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
							<p class="text-sm text-gray-600 dark:text-gray-200">This is an informational message!</p>
						</div>
					</div>
				</div>
			</x-grid.item>

			<!-- Neutral Pop -->
			<x-grid.item title="Neutral">
				<div class="bg-secondary flex w-full max-w-sm overflow-hidden rounded-lg shadow-md">
					<div class="flex w-12 items-center justify-center bg-gray-500 text-white">
						<x-svg.ironman class="size-7" />
					</div>
					<div class="-mx-3 px-4 py-2">
						<div class="mx-3">
							<span class="font-semibold text-gray-500 dark:text-gray-400">Neutral</span>
							<p class="text-sm text-gray-600 dark:text-gray-200">No new updates available at the moment.</p>
						</div>
					</div>
				</div>
			</x-grid.item>
		</x-grid>

	</x-grid>

    <x-slot name="rightSidenav">
    
        @php
            $list = [
                'Alerts' => ['Notification Pop'],
                'Pops' => ['Success', 'Error', 'Warning', 'Info', 'Neutral'],
            ];
        @endphp
    
        @foreach ($list as $category => $items)
            <x-sidenav-category>{{ $category }}</x-sidenav-category>
            @foreach ($items as $item)
                <x-sidenav-list>{{ $item }}</x-sidenav-list>
            @endforeach
        @endforeach
    </x-slot>

</x-app-layout>
