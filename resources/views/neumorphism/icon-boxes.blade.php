<x-app-layout>

	<x-grid title="Icons">
		<x-slot name="description">
			Icons are a great way to add visual elements to your page. You can use them to display information, decorate your page, or just for fun.
		</x-slot>

		<x-grid.item title="Hamburger">
			<div class="size-20 flex-center group cursor-pointer flex-col rounded-lg shadow-neu-xs transition-shadow duration-700 active:shadow-neu-inset-md dark:shadow-neu-dark-md dark:active:shadow-neu-dark-inset-sm">
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:-rotate-45 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:scale-0 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
				<span class="my-1 h-1 w-1/2 rounded-md bg-dark-secondary transition-all duration-300 ease-in-out group-active:-m-[2px] group-active:rotate-45 group-active:bg-dark-primary dark:bg-light-secondary dark:group-active:bg-light-primary"></span>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
