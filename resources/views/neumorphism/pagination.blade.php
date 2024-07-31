<x-app-layout title="Paginations">

	<x-grid title="Paginations">
		<x-slot name="description">
			Paginations are used to navigate through pages of content. They are typically used when there are more than one page of content to display.
		</x-slot>

		<x-grid.item title="Pagination">
			<div class="bg-primary rounded-md p-3 shadow-neu-xs">
				<ul class="flex-center list-none">
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 font-karla no-underline" href="#">Previous</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">1</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">2</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">3</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">4</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">5</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">6</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">7</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">8</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs sm:hidden">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">...</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 text-center font-karla no-underline" href="#">Next</a>
					</li>
				</ul>
			</div>
		</x-grid.item>

		<x-grid.item title="Pagination with Icons">
			<div class="bg-primary rounded-md p-3 shadow-neu-xs">
				<ul class="flex-center list-none">
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 font-karla no-underline" href="#">
							<x-svg.left class="size-6" />
						</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">1</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">2</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">3</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">4</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">5</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">6</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">7</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">8</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs sm:hidden">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">...</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 text-center font-karla no-underline" href="#">
							<x-svg.right class="size-6" />
						</a>
					</li>
				</ul>
			</div>
		</x-grid.item>

		<x-grid.item title="Rounded Pagination">
			<div class="bg-primary rounded-full p-3 shadow-neu-xs">
				<ul class="flex-center list-none">
					<li class="bg-primary mx-1 flex-1 rounded-full shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 font-karla no-underline" href="#">
							<x-svg.left class="size-6" />
						</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded-full shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">1</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded-full shadow-neu-xs">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">2</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">3</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">4</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">5</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">6</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">7</a>
					</li>
					<li class="bg-primary mx-1 hidden flex-1 rounded-full shadow-neu-xs sm:block">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">8</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded-full shadow-neu-xs sm:hidden">
						<a class="text-secondary hover:text-primary min-w-7 block p-1 text-center font-karla no-underline" href="#">...</a>
					</li>
					<li class="bg-primary mx-1 flex-1 rounded-full shadow-neu-xs first:mr-2 last:ml-2 sm:first:mr-4 sm:last:ml-4">
						<a class="text-secondary hover:text-primary block px-2 py-1 text-center font-karla no-underline" href="#">
							<x-svg.right class="size-6" />
						</a>
					</li>
				</ul>
			</div>
		</x-grid.item>

	</x-grid>

</x-app-layout>
