<x-app-layout title="Sidebars">

    <x-grid title="Sidebars">
        <x-slot name="description">
            Sidebars are used to display additional information or options that are not part of the main content. They are used to provide users with quick access to important information or features.
        </x-slot>
    
        <x-grid.item title="Simple Sidebar">
            @include('sidebars.simple-sidebar')
        </x-grid.item>
    
    </x-grid>

</x-app-layout>