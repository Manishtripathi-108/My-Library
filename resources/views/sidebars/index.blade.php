<x-app-layout title="Sidebars">

	<x-grid title="Sidebars">
		<x-slot name="description">
			Sidebars are used to display additional information or options that are not part of the main content. They are used to provide users with quick access to important information or features.
		</x-slot>

		<x-grid.item title="Simple Sidebar">
			@include('sidebars.simple-sidebar')
		</x-grid.item>

		<x-grid.item title="Sidebar with Icons">
			@include('sidebars.sidebar-with-icons')
		</x-grid.item>

		<x-grid.item title="Mobile Menu">
			@include('sidebars.mobile-menu')
		</x-grid.item>

	</x-grid>

	<x-slot name="rightSidenav">

		@php
			$list = ['Simple Sidebar', 'Sidebar with Icons', 'Mobile Menu'];
		@endphp

		@foreach ($list as $items)
			<x-sidenav-category>{{ $items }}</x-sidenav-category>
		@endforeach
	</x-slot>

</x-app-layout>
