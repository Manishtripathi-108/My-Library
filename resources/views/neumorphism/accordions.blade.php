<x-app-layout>
	<x-grid class="pt-4" title="Accordions">

		<x-slot name="description">
			Accordions are a great way to display content in a collapsible manner. They are useful for FAQs, product descriptions, and more.
		</x-slot>

		{{-- Accordion --}}
		<x-grid.item title="Accordion">
			<div class="w-[800px] overflow-hidden rounded-xl border-light-secondary shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ activeTab: null }">
				{{-- Accordion --}}
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-1' : null">
					{{-- Heading --}}
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Tab 1</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					{{-- Content --}}
					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-2' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Tab 2</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-3' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary font-karla font-bold tracking-wider">Tab-3</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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

		{{-- Accordion with icons --}}
		<x-grid.item title="Accordion with Icons">
			<div class="w-[800px] overflow-hidden rounded-xl border-light-secondary shadow-neu-md-soft dark:border-dark-secondary dark:shadow-neu-dark-md" x-data="{ activeTab: null }">
				{{-- Accordion --}}
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-1' : null">
					{{-- Heading --}}
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary flex-center gap-x-4 font-karla font-bold tracking-wider">
							<x-svg.ex class="size-6" />
							Tab 1
						</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					{{-- Content --}}
					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-2' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary flex-center gap-x-4 font-karla font-bold tracking-wider">
							<x-svg.ex class="size-6" />
							Tab 2
						</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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
				<div class="bg-primary relative flex flex-auto flex-col break-words border border-light-secondary dark:border-dark-secondary" x-data="{ open: false }" @click="open = !open; activeTab = open ? 'tab-3' : null">
					<a class="flex cursor-pointer items-center justify-between p-6">
						<span class="text-primary flex-center gap-x-4 font-karla font-bold tracking-wider">
							<x-svg.ex class="size-6" />
							Tab-3
						</span>
						<span class="text-primary duration-500" x-show="!open"><x-svg.plus class="size-5" /></span>
						<span class="text-primary duration-500" x-show="open"><x-svg.minus class="size-5" /></span>
					</a>

					<div class="overflow-hidden transition-[max-height] duration-500 ease-in-out" x-show="open" x-transition:enter="max-h-0" x-transition:enter-start="max-h-0" x-transition:enter-end="max-h-screen" x-transition:leave="max-h-screen" x-transition:leave-start="max-h-screen" x-transition:leave-end="max-h-0">
						<div class="p-6 pt-0">
							<p class="text-secondary font-karla">
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
		<x-sidenav-list>Accordion with Icons</x-sidenav-list>
	</x-slot>

</x-app-layout>
