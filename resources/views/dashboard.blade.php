<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @foreach ($posts as $post)
            <x-post-component :post="$post" />
        @endforeach
    </div>


</x-app-layout>
