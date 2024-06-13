<x-app-layout>

    <div class="m-10 flex flex-col gap-10">

        @include('cards.tag-card', ['slot' => 'Tag Card 1'])

        @include('cards.reflect-hover')
    </div>

</x-app-layout>
