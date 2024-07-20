<x-app-layout>

	<x-grid title="Breadcrumbs">

		<x-slot name="description">
			Breadcrumbs are a great way to show the user where they are in the site's hierarchy. This is a simple example of how to create breadcrumbs using Tailwind CSS.
		</x-slot>

		<x-grid.item title="Default Breadcrumbs">
			<nav class="bg-primary w-full px-4 py-3 font-karla">
				<ol class="list-reset text-grey-dark flex">
					<li><a class="text-secondary hover:text-primary" href="#">Home</a></li>
					<li><span class="text-secondary mx-2">/</span></li>
					<li><a class="text-secondary hover:text-primary" href="#">Library</a></li>
					<li><span class="text-secondary mx-2">/</span></li>
					<li><a class="text-secondary hover:text-primary" href="#">Data</a></li>
				</ol>
			</nav>
		</x-grid.item>

		<x-grid.item title="Inset Breadcrumbs">
			<nav class="bg-primary mb-4 w-full rounded px-4 py-3 font-karla shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm">
				<ol class="list-reset text-grey-dark flex">
					<li><a class="text-secondary hover:text-primary" href="#">Home</a></li>
					<li><span class="text-secondary mx-2">/</span></li>
					<li><a class="text-secondary hover:text-primary" href="#">Library</a></li>
					<li><span class="text-secondary mx-2">/</span></li>
					<li><a class="text-secondary hover:text-primary" href="#">Data</a></li>
				</ol>
			</nav>
			<nav class="bg-primary w-full rounded px-4 py-3 font-karla shadow-neu-inset-sm dark:shadow-neu-dark-inset-sm">
				<ol class="list-reset text-grey-dark flex">
					<li><a class="text-secondary hover:text-primary" href="#">Home</a></li>
					<li><span class="text-primary mx-2 text-xs">>></span></li>
					<li><a class="text-secondary hover:text-primary" href="#">Library</a></li>
					<li><span class="text-primary mx-2 text-xs">>></span></li>
					<li class="text-primary">Data</li>
				</ol>
			</nav>
		</x-grid.item>
	</x-grid>

	<x-slot name="rightSidenav">
		<x-sidenav-list>Default Breadcrumbs</x-sidenav-list>
		<x-sidenav-list>Inset Breadcrumbs</x-sidenav-list>
	</x-slot>

</x-app-layout>
