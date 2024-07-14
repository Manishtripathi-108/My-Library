<x-app-layout>
	<x-grid class="pt-4" title="Accordions">

		{{-- Accordion --}}
		<x-grid.item title="Accordion">
			<div class="w-[800px] overflow-hidden rounded-xl shadow-neu-md-soft" x-data="{ activeTab: null }">
				{{-- Accordion --}}
				<div class="bg-primary relative flex flex-auto flex-col break-words border" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'our-company' : null">
					{{-- Heading --}}
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Our Company</span>
						<span class="icon duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="icon duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					{{-- Content --}}
					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="font-karla">
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
							</p>
						</div>
					</div>
				</div>

				{{-- Accordion --}}
				<div class="bg-primary relative flex flex-auto flex-col break-words border" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'neumorphism-components' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Neumorphism Components</span>
						<span class="icon duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="icon duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="font-karla">
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
							</p>
						</div>
					</div>
				</div>

				{{-- Accordion --}}
				<div class="bg-primary relative flex flex-auto flex-col break-words border" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'licenses' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Licenses</span>
						<span class="icon duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="icon duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="font-karla">
								<x-joke />
								<x-joke />
								<x-joke />
								<x-joke />
							</p>
						</div>
					</div>
				</div>
			</div>
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Accordion</x-sidenav-list>

	</x-slot>

</x-app-layout>
