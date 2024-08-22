@php
	$menuItems = [['title' => 'Profile', 'category' => 'Profile', 'icon' => 'profile-icon', 'links' => ['Profile', 'Settings']], ['title' => 'Applications', 'category' => 'Applications', 'icon' => 'app-icon', 'links' => ['Users', 'Orders', 'Track Orders', 'Products']], ['title' => 'Reports', 'category' => 'Reports', 'icon' => 'report-icon', 'links' => ['Sales', 'Expenses', 'Profit']], ['title' => 'Settings', 'category' => 'Settings', 'icon' => 'settings-icon', 'links' => ['General', 'Security', 'Notifications']]];
@endphp

<div class="relative h-[700px]">
	<aside class="group/sidebar border-r-dashed fixed inset-y-0 left-0 z-40 m-0 flex w-[250px] shrink-0 flex-col overflow-hidden rounded-lg border-r border-r-neutral-600 bg-gray-800 transition-all duration-300 ease-in-out lg:w-[300px]">
		<div class="flex h-28 w-full shrink-0 items-center justify-between">
			<a class="h-full w-full transition-colors duration-200 ease-in-out" href="#">
				<img class="size-full overflow-hidden object-cover object-center" src="{{ asset('images/landscape/fantasy-scene-gearworks.png') }}" alt="">
			</a>
		</div>

		<div class="hidden border-b border-dashed border-neutral-600 lg:block"></div>

		<div class="flex items-center justify-between px-8 py-5">
			<div class="mr-5 flex items-center">
				<div class="mr-5">
					<div class="relative inline-block shrink-0 cursor-pointer">
						<img class="size-11 inline-block shrink-0 rounded-lg" src="{{ asset('images/square/animal-orange-bird.png') }}" alt="Avatar Image">
					</div>
				</div>
				<div class="mr-2">
					<a class="font-medium text-white transition-colors duration-200 ease-in-out hover:text-light-primary" href="javascript:void(0)">Roronoa Zoro</a>
					<span class="block text-xs font-medium text-gray-400">Sword Master</span>
				</div>
			</div>
			<a class="group relative inline-flex cursor-pointer items-center justify-end border-0 bg-transparent text-center align-middle text-base font-medium leading-normal text-white shadow-none transition-colors duration-150 ease-in-out" href="javascript:void(0)">
				<span class="group-hover:text-primary peer shrink-0 leading-none text-gray-400 transition-colors duration-200 ease-in-out">
					<x-svg.settings class="h-6 w-6" />
				</span>
			</a>
		</div>

		<div class="hidden border-b border-dashed border-neutral-600 lg:block"></div>

		<div class="scrollbar-thin relative my-5 overflow-y-scroll pl-3">
			<div class="flex w-full flex-col font-medium">

				@foreach ($menuItems as $item)
					<div class="{{ !$loop->first ? 'pt-5' : '' }} block px-4 pb-2">
						<span class="text-secondary-dark font-semibold uppercase text-gray-500">{{ $item['category'] }}</span>
					</div>

					@foreach ($item['links'] as $link)
						<!-- menu item -->
						<div>
							<span class="my-1 flex cursor-pointer select-none items-center px-4 py-2">
								<a class="flex flex-grow items-center text-sm text-gray-400 hover:text-light-primary" href="javascript:;">{{ $link }}</a>
							</span>
						</div>
					@endforeach
				@endforeach

			</div>
		</div>
	</aside>
</div>
