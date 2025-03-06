<div class="mt-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <!-- Cabeçalho do post -->
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-gray-500 mr-3">Autor:</span>
                        <span class="text-blue-600">{{ $post->user->name }}</span>
                    </div>
                    <div class="text-right">
                        <span class="text-gray-500 mr-3">Criado em:</span>
                        <span>{{ $post->created_at }}</span>
                    </div>
                </div>

                <!-- Conteúdo do post -->
                <div class="mt-4">
                    <h1 class="text-xl font-bold">{{ $post->title }}</h1>
                    <p class="mt-3">{{ $post->content }}</p>
                </div>
                <div class="mt-3 ps-5 text-end">
                    @can('post.delete', $post)
                       <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-6 rounded">Deletar</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>