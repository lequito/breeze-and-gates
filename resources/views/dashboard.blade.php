<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- post create --}}

        @empty($posts->count())
            <div class="max-w-7xl mx-auto mb-6 px-8 text-center">
                <p class="text-gray-400 mb-5">Não há postagens</p>

                @can('post.create')
                    <div class="max-w-7xl mx-auto mb-6 px-8">
                        <a href="{{ route('post.create') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded">Criar Post</a>    
                    </div>    
                @endcan
                
            </div>
            @else
                @can('post.create')
                    <div class="max-w-7xl mx-auto mb-6 px-8">
                        <a href="{{ route('post.create') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-6 rounded">Criar Post</a>    
                    </div>    
                @endcan
        
        @endempty


        @foreach ($posts as $post)
            <x-post-component :post="$post" />
        @endforeach
    </div>


</x-app-layout>
